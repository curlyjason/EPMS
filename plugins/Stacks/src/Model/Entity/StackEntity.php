<?php

namespace Stacks\Model\Entity;

use Cake\Datasource\EntityInterface;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\ORM\TableRegistry;
use Stacks\Constants\LayerCon;
use Stacks\Exception\UnknownLayerException;
use Stacks\Interfaces\LayerStructureInterface;
use Stacks\Model\Lib\LayerAccessProcessor;
use Cake\ORM\Entity;
use Stacks\Model\Lib\Layer;
use Cake\Utility\Hash;
use Stacks\Model\Lib\LayerAccessArgs;
use Stacks\Exception\BadClassConfigurationException;
use Cake\Utility\Text;

/**
 * Stacks
 *
 * Tools to manage multiple Layer object properties in a containing object
 *
 * Provide reporting tools to see what records are stored in the contained
 * entity stacks.
 *
 * Provide accessor tools to extract contained objects with explicit looping
 *
 * @author Main
 * @method element($id, bool $LAYERACC_ID)
 */
class StackEntity extends Entity implements LayerStructureInterface
{

    /* @todo use of the trait throws an error. Can't suss it out yet */
//    use LocatorAwareTrait;

    /**
     * Name of the tip-of-the-iceberg entity for this stack
     *
     * The value migrates forward from the concrete stackTable
     * during creation and population of the entity and its values
     *
     * @var string
     */
    protected $rootName = FALSE;

    /**
     * The displayField source for the root entity
     *
     * displayField() is a Table concept and is used for several find()
     * variants. Since stackEntities mimic some of these features, they
     * need to include a displayField() equivalent.
     *
     * StackTable migrates this table-based value into to stackEntities
     * where it takes on the additonal ability to be the name of a method
     * that has no arguemnts (eg: name( ) ).
     *
     * [1] The value wil be the moved forward from one of two sources:
     *        displayField() of the root layers underlying table
     *        $rootDisplaySource of the concrete stackTable for this entity
     *
     * @todo Make [1] a true statement
     *
     * @var string
     */
    public $rootDisplaySource = FALSE;

    /**
     * names of the layers and thier Entity types
     *
     * eg:
     * [
     *      'identity' => 'Member',
     *      'artwork' => 'Artwork'
     * ]
     *
     * @var array
     */
    public $schema;

    /**
     * The layer data in Cake-standard nested form
     *
     * @var EntityInterface
     */
    protected $origin = null;

    //<editor-fold desc="Nested Data for Form Compatibility">
    /**
     * Get the stack data a a standard Cake nested entity structure
     *
     * @return EntityInterface
     */
    public function emitNested()
    {
        return $this->origin;
    }

    /**
     * Set the nested version of the data
     *
     * The top level marshaller can query the data and will get it in
     * nested form. All the layer mashallers can work from this nest
     * and the nest can be sent through here for storage and later retrieval
     *
     * @param $data
     */
    public function setOriginData($data)
    {
        $this->origin = $data;
    }
    //</editor-fold>

    //<editor-fold desc="LayerStructureInterface Realization">
    /**
     * Gather the available data at this level and package the iterator
     *
     * @param $name string
     * @return LayerAccessProcessor
     * @throws \BadMethodCallException
     */
    public function getLayer($name, $className = null)
    {
        if (is_null($this->$name)) {
            $msg = "The layer '$name' is not the name of a layer in " . get_class($this);
            throw new \BadMethodCallException($msg);
        }

        $className = $className ?? $this->$name->entityClass();

        $Iterator = new LayerAccessProcessor($name, $className);
        if (is_a($this->$name, '\Stacks\Model\Lib\Layer')) {
            $result = $this->$name;
        } else {
            $result = [];
        }
        return $Iterator->insert($result);
    }

    /**
     * Get an new LayerAccessArgs instance
     * @return LayerAccessArgs
     */
    public function getArgObj()
    {
        return new LayerAccessArgs();
    }
    //</editor-fold>

    //<editor-fold desc="Introspection">

    /**
     * As an array, get this primary id or the IDs of all the entities in a layer
     *
     * @param string $layer
     * @return array
     */
    public function IDs($layer = null)
    {
        if(is_null($layer)) {
            $result = $this->rootID(LayerCon::LAYERACC_WRAP);
        } else {
            $result = $this->getLayer($layer)->toDistinctList('id');
        }
        return $result;
    }

    /**
     * As a value, get the id of a layer record or the first id if more than 1 record
     *
     * @param null $layer
     * @return int|string
     */
    public function ID($layer = null) {
        $result = $this->IDs($layer);
        return array_pop($result);
    }

    /**
     * Checks that a field is empty
     *
     * This is not working like the PHP `empty()` function. The method will
     * return true for:
     *
     * - `''` (empty string)
     * - `null`
     * - `[]`
     *
     * and false in all other cases.
     *
     * @param string $field The field to check.
     * @return bool
     */
    public function isEmpty(string $field): bool
    {
        if (is_null($field)) {
            $field = $this->getRootLayerName();
        }
        $value = $this->get($field);
        if (is_object($value)
            && $value instanceof Layer
            && $value->count() === 0
        ) {
            return true;
        }
        return parent::isEmpty($field);
    }

    /**
     * Is the id a member of the set
     *
     * @param string $id
     * @return boolean
     * @todo Overlap with Entity has() method. Resolve our name strategy
     *
     */
    public function exists($layer, $id)
    {
        $property = $this->get($layer);
        if ($property) {
            return $property->hasId($id);
        }
        return FALSE;
    }

    /**
     * Get the count of entities in a layer
     *
     * @todo There is still the possiblity of having empty properties
     *      hold empty Layers so they count and act normally
     *
     * @param string $layer
     * @return int
     */
    public function count($layer)
    {
        $property = $this->get($layer);
        if (is_countable($property)) {
            return $property->count();
        }
        return 0;
    }

    public function hasNo($layer)
    {
        return $this->count($layer) === 0;
    }

    /**
     * Gets the list of visible fields.
     *
     * The list of visible fields is all standard fields
     * plus virtual fields minus hidden fields.
     *
     * @return string[] A list of fields that are 'visible' in all
     *     representations.
     */
    public function getVisible(): array
    {
        return array_diff(parent::getVisible(), ['rootName', 'rootDisplaySource']);
    }

    /**
     * Get the list of layer in these stack entities
     *
     * @return array|string[]
     */
    public function getLayerList()
    {
        return $this->getVisible();
    }


    public function hasLayer($layer)
    {
        return $this->count($layer) > 0;
    }
    //</editor-fold>

    //<editor-fold desc="Root Layer Introspection and Access">

    /**
     * Return the owner id of the primary entity
     *
     * @return string
     */
    public function dataOwnerId()
    {
        return $this->rootElement()->user_id;
    }

    /**
     * Get the card identity entity
     *
     * Optionally get the entity as an array element
     *
     * @param boolean $unwrap
     * @return entity|array
     */
    public function rootElement($unwrap = LayerCon::LAYERACC_UNWRAP)
    {
        $result = $this->{$this->getRootLayerName()}->toArray();
        return $this->_resolveWrapper($result, $unwrap);
    }

    /**
     * Is this StackEntity empty?
     *
     * @return bool
     */
    public function isEmptyStack()
    {
        return count($this->rootElement(LayerCon::LAYERACC_WRAP)) == 0;
    }

    public function setRoot($layer)
    {
        $this->set('rootName', $layer);
        return $this;
    }

    public function setRootDisplaySource($source)
    {
        $this->set('rootDisplaySource', $source);
        return $this;
    }

    /**
     * Get id of the card cap entity
     *
     * Optionally get the id as an array element
     *
     * @param boolean $unwrap
     * @return string|array
     */
    public function rootID($unwrap = LayerCon::LAYERACC_UNWRAP)
    {
        $result = $this->{$this->getRootLayerName()}->IDs();
        return $this->_resolveWrapper($result, $unwrap);
    }

    /**
     * Get displayValue for the card's cap entity
     *
     * Optionally get the name as an array element
     *
     * @param boolean $unwrap
     * @return string|array
     */
    public function rootDisplayValue($unwrap = LayerCon::LAYERACC_UNWRAP)
    {
        /* @var Layer $rootLayer */
        $rootLayer = new Layer($this->rootElement(LayerCon::LAYERACC_WRAP));
        $title = $rootLayer->toValueList($this->rootDisplaySource());
        return array_shift($title);
//        osd($rootLayer);
//        osd($this->rootDisplaySource());
//        return $rootLayer->toValueList($this->rootDisplaySource())[0];

//        $result = $this->valueList($this->rootDisplaySource(), [$this->rootElement()]);
//        return $this->_resolveWrapper($result, $unwrap);
    }

    /**
     * Get the name of the displaySource (property or method) for capEntity
     *
     * This is the analog of Table::displayField.
     *
     * @return string
     * @throws BadClassConfigurationException
     */
    public function rootDisplaySource()
    {
        if ($this->rootDisplaySource === FALSE) {
            throw new BadClassConfigurationException(
                'A display source (rootDisplaySource) must be set for the '
                . 'root record in the stack entity ' . get_class($this));
        }
        return $this->rootDisplaySource;
    }

    /**
     * Get the name of the cap layer for this stackEntity
     *
     * @return string
     */
    public function getRootLayerName()
    {
        if ($this->get('rootName') === FALSE) {
            throw new BadClassConfigurationException(
                'The name of the root entity ($this->rootName) must '
                . 'be set in the stack entity ' . get_class($this));
        }
        return $this->get('rootName');
    }
    //</editor-fold>

    /**
     * For an array with a single item, should it be unwrapped
     *
     * @param array $data
     * @param boolean $unwrap
     * @return string|array
     */
    protected function _resolveWrapper($data, $unwrap)
    {
        if ($unwrap) {
            $result = array_shift($data);
        } else {
            $result = $data;
        }
        return $result;
    }

    /**
     * For an array of entities, should they be made into a Layer
     *
     * It's possible for an empty array to come, so getting
     * the entity type is important to insure Layer can construct
     *
     * @param array $data
     * @param boolean $asArray
     * @return array|Layer
     */
    protected function _resolveReturnStructure($data, $asArray, $entityType)
    {
        if (!$asArray) {
            $data = new Layer($data, $entityType);
        }
        return $data;
    }

// <editor-fold defaultstate="collapsed" desc="LAYER ACCESS INTERFACE REALIZATION">

    /**
     * In a layer, get the entities linked to a specified record
     *
     * @throws UnknownLayerException
     * @param string $layer
     * @param array $options
     * @return LayerAccessArgs
     */
    public function linkedTo($foreign, $foreign_id, $layer = null)
    {
        if (!array_key_exists($layer, $this->schema)) {

            $className = get_class($this);
            $layers = array_keys($this->schema);
            $available = Text::toList($layers);

            $msg = "'The layer $layer doesn\'t exist in $className. '
                . 'Available choices are $available.'";

            throw new UnknownLayerException($msg);
        }
        return $this->$layer->linkedTo($foreign, $foreign_id);
    }

// </editor-fold>


    /**
     * Pass through for 'set' to handle Layer type columns
     *
     * If a layer value is set() directly with an array, this
     * overwrite will take care of it. New and patch entity do
     * the correct typing I think.
     *
     * {@inheritdoc}
     *
     * @param string $property
     * @param mixed $value
     * @param array $options
     * @return Entity
     */
    public function set($property, $value = null, array $options = [])
    {
//        $typeMap = $this->getTableLocator()
        $typeMap = TableRegistry::getTableLocator()
            ->get($this->getSource())
            ->getSchema()
            ->typeMap();

        if (is_string($property)
            && Hash::extract($typeMap, $property) === ['layer']
            && !($value instanceof Layer)) {
            $value = $this->makeLayerObject($property, $value);

        } elseif (is_array($property)) {
            $typeMap = (Hash::filter($typeMap, function ($value) {
                return $value === 'layer';
            }));
            foreach ($typeMap as $p => $unused) {
                if (key_exists($p, $property)
                    && !($property[$p] instanceof Layer)) {
                    $property[$p] = $this->makeLayerObject($p, $property[$p]);
                }
            }
        }
        return parent::set($property, $value, $options);
    }

    private function makeLayerObject($layer, $seed)
    {
        try {
            $product = new Layer($seed);
            return $product;
        } catch (\Exception $ex) {
            $this->setError($layer, $ex->getMessage());
//            osd($this->getErrors());
            return new Layer([], $layer);
        }
    }

}

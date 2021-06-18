<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MaterialUnitCost Entity
 *
 * @property string $MaterialCode
 * @property float $Quantity
 * @property string|null $UnitCost
 * @property \Cake\I18n\FrozenTime|null $EntryDate
 * @property \Cake\I18n\FrozenTime|null $EntryTime
 * @property string|null $CreateOpr
 * @property \Cake\I18n\FrozenTime|null $CreateDatim
 * @property string|null $UpdateOpr
 * @property \Cake\I18n\FrozenTime|null $Updatedatim
 * @property string|null $ContractUnitCost
 * @property string|null $POUnitCost
 * @property string|null $FlatCost
 */
class MaterialUnitCost extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'UnitCost' => true,
        'EntryDate' => true,
        'EntryTime' => true,
        'CreateOpr' => true,
        'CreateDatim' => true,
        'UpdateOpr' => true,
        'Updatedatim' => true,
        'ContractUnitCost' => true,
        'POUnitCost' => true,
        'FlatCost' => true,
    ];
}

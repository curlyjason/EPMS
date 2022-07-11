<?php

use App\View\AppView;
use Cake\ORM\Entity;

/**
 * @var AppView $this
 * @var array $reduced_map
 * @var string $primary_key
 * @var Entity $record
 */

//$record->getOriginalValues()

$hyphenOrValue = function($value){
    return empty($value) ? '---' : $value;
};

$columnData = function($target_key) use ($record, $hyphenOrValue){
    /**
     * @var App\Model\Entity\ $record
     */
    if($record->isDirty($target_key)){
        $value = "<span style='color:green;'>{$hyphenOrValue($record->$target_key)}</span>" .
            "</br>" .
            "<span style='color:red;'>{$hyphenOrValue($record->getOriginalValues()[$target_key])}</span>";
    }
    else {
        $value = $record->$target_key;
    }
    return $value;
};


echo '<tr>';
echo $this->Html->tag('td', $record->$primary_key);
foreach ($reduced_map as $source_key => $target_key) {
    echo $this->Html->tag('td', $columnData($target_key));
}
echo '</tr>';

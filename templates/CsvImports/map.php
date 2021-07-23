<?php

use App\View\AppView;
use Cake\Utility\Inflector;

/**
 * @var AppView $this
 * @var array $target_columns
 * @var array $source_columns
 * @var string $target_table
 * @var string $action
 */

$this->append('script');
echo $this->Html->script('selectorama');
$this->end();


$key_array = collection($target_columns)
    ->reduce(function($accum, $target_column){
        $accum[strtolower($target_column)] = $target_column;
        return $accum;
    }, []);


$autoMatch = function ($source_column) use ($key_array){
    $check_string = strtolower(Inflector::camelize($source_column));
    if(array_key_exists($check_string, $key_array)){
        return $key_array[$check_string];
    }
    else {
        return '';
    }
};

echo $this->Html->tag('h2', "$action $target_table");
echo $this->Form->create();
foreach ($source_columns as $source_column) {
    echo $this->Form->control(
        $source_column,
        [
            'type' => 'select',
            'options' => $target_columns,
            'empty' => 'choose a target column',
            'value' => $autoMatch($source_column),
            'class' => $autoMatch($source_column) === '' ? 'unselected' : 'selected'
        ]
    );
}
echo $this->Form->submit();
echo $this->Form->end();
echo $this->Html->script('selectorama');

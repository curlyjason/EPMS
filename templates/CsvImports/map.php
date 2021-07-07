<?php

use App\View\AppView;

/**
 * @var AppView $this
 * @var array $target_columns
 * @var array $source_columns
 * @var string $target_table
 */
echo $this->Html->tag('h2', "Importing to $target_table");
echo $this->Form->create();
foreach ($source_columns as $source_column) {
    echo $this->Form->control($source_column, ['type' => 'select', 'options' => $target_columns, 'empty' => 'choose a target column']);
}
echo $this->Form->submit();
echo $this->Form->end();

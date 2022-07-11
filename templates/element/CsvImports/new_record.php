<?php

use App\View\AppView;
use Cake\ORM\Entity;

/**
 * @var AppView $this
 * @var array $reduced_map
 * @var string $primary_key
 * @var Entity $record
 */

echo '<tr style="background-color: lightcyan">';
echo $this->Html->tag('td', $record->$primary_key);
foreach ($reduced_map as $source_key => $target_key) {
    echo $this->Html->tag('td', $record->$target_key);
}
echo '</tr>';

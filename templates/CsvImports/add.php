<?php

use App\View\AppView;

/**
 * @var AppView $this
 * @var array $targets
 */

?>
<?= $this->Form->create(null, ['type' => 'file']) ?>
<?= $this->Form->select('target', $targets, ['empty' => 'Select a target table']) ?>
<?= $this->Form->control('file', ['type' => 'file']) ?>
<?= $this->Form->submit() ?>
<?= $this->Form->end() ?>

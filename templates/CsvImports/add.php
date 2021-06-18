<?php

use App\View\AppView;

/**
 * @var AppView $this
 */

?>
<?= $this->Form->create(null, ['type' => 'file']) ?>
<?= $this->Form->control('file', ['type' => 'file']) ?>
<?= $this->Form->submit() ?>
<?= $this->Form->end() ?>

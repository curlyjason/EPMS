<?php

use \App\View\AppView;

/**
 * @var AppView $this
 * @var string $controller
 */

echo $this->Html->nestedList($this->Navigation->linksFromPublicFunctions($controller));

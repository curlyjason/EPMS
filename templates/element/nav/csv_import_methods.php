<?php

use App\Lib\Introspection;
use \App\View\AppView;

/**
 * @var AppView $this
 * @var string $controller
 */


$links = collection(Introspection::getEndpoints($controller))
    ->map(function($method) use ($controller) {
        return $this->Html->link($method, ['controller' => $controller, 'action' => $method]);
    })
    ->toArray();
$ul_struct = [
    $controller => $links
];
echo $this->Html->nestedList($ul_struct);

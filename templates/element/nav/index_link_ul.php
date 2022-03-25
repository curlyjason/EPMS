<?php

use App\Lib\Introspection;

$links = collection(Introspection::indexViews())
    ->map(function($controller){
        return $this->Html->link($controller, ['controller' => $controller, 'action' => 'index']);
    })
    ->toArray();
$ul_struct = [
    'Index Pages' => $links
];
echo $this->Html->nestedList($ul_struct);

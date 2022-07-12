<?php

namespace App\View\Helper;

use App\Lib\Introspection;
use Cake\View\Helper;

class NavigationHelper extends Helper
{

    public $helpers = ['Html'];

    public function linksFromPublicFunctions($controller): array
    {
        $links = collection(Introspection::getEndpoints($controller))
            ->map(function ($method) use ($controller) {
                return (!str_starts_with($method, "_"))
                    ? $this->Html->link($method, ['controller' => $controller, 'action' => $method])
                    : null;
            })
            ->toArray();
        return [$controller => $links];
    }
}

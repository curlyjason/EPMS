<?php

use App\Lib\Introspection;
use \App\View\AppView;

/**
 * @var AppView $this
 */

echo $this->element('nav/index_link_ul');
echo $this->element('nav/csv_import_methods', ['controller' => 'CsvImports']);

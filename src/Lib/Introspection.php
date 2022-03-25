<?php


namespace App\Lib;


use Cake\Filesystem\Folder;

/**
 * Introspection
 *
 * A class to help make the Sysadmin tool pages dynamic.
 *
 * Compiles lists of class and methods from the code base to support
 * dynamic admin tool pages.
 *
 * @package App\Lib
 */
class Introspection
{

    /**
     * Get an array of methods from a single class
     *
     * @param $obj
     * @return array
     */
    static public function methods($obj)
    {
        return get_class_methods($obj);
    }

    /**
     * Get an array of standard ORM table names (in alias form)
     *
     * @return mixed|null
     */
    static public function ormTables() {
        $tableDir = new Folder(APP.'Model'.DS.'Table');
        $allFiles = ($tableDir->find('(.*)Table.php'));
        $files = collection($allFiles)
            ->reduce(function($accum, $file) {
                if (!preg_match('/Stack/', $file)) {
                    $accum[] = str_replace('Table.php', '', $file);
                }
                return $accum;
            }, []);
        return $files;
    }

    /**
     * Get a list of all the Controllers that have a public 'index' method
     *
     * @return mixed|null
     */
    static public function indexViews() {
        $controllerDir = new Folder(APP.'Controller');
        $allFiles = ($controllerDir->find('(.*)Controller.php'));
        $files = collection($allFiles)
            ->reduce(function($accum, $file) {
                $methods = get_class_methods('\App\Controller\\' . str_replace('.php', '', $file));
                if (in_array('index', $methods)) {
                    $accum[] = str_replace(['Controller', '.php'], '', $file);
                }
                return $accum;
            }, []);
        return $files;
    }

}

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
        $files = collection(self::getAllTables())
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
        $files = collection(self::getAllControllers())
            ->reduce(function($accum, $file) {
                $methods = get_class_methods('\App\Controller\\' . str_replace('.php', '', $file));
                if (in_array('index', $methods)) {
                    $accum[] = str_replace(['Controller', '.php'], '', $file);
                }
                return $accum;
            }, []);
        return $files;
    }

    /**
     * Get all fully-qualified controller class names
     *
     * @return mixed|null
     */
    static public function controllerClasses() {
        $controllers = collection(self::getAllControllers())
            ->map(function($file) {
                return preg_replace(
                    '/(.*).php/', '\App\Controller\\\\$1', $file);
            })
            ->toArray();
        return $controllers;
    }

    /**
     * Get all controller file names
     *
     * @return array
     */
    private static function getAllControllers(): array
    {
        $controllerDir = new Folder(APP . 'Controller');
        $allFiles = ($controllerDir->find('(.*)Controller.php'));
        return $allFiles;
    }

    /**
     * @return array
     */
    private static function getAllTables(): array
    {
        $tableDir = new Folder(APP . 'Model' . DS . 'Table');
        $allFiles = ($tableDir->find('(.*)Table.php'));
        return $allFiles;
    }

    public static function getEndpoints($controller) {
        $inherited = get_class_methods('\App\Controller\AppController');
        $target = get_class_methods('\App\Controller\\' . $controller . 'Controller');
        return collection(array_diff($target, $inherited))
            ->filter(function($method){
                return $method[0] !== '_';
            });

    }
}

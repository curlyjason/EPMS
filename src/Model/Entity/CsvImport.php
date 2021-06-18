<?php


namespace App\Model\Entity;


class CsvImport extends \Cake\ORM\Entity
{
    protected $_virtual = ['id'];

    public function _getId()
    {
        return $this->stock_number;
    }

}

<?php


namespace App\Model\Table;


class AppTable extends \Cake\ORM\Table
{
    public function fixPatchData(array $data)
    {
        return $data;
    }

}

<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Locator\LocatorAwareTrait;

class ArticlesTable extends Table
{
    public function getArt()
    {
        $columns = [
            'id',
            'title'
        ];
        $builder = $this->find();
        $builder->select($columns);
        $builder->where(['id =' => 1]);
        $builder->order(['created' => 'DESC']);
        $result = $builder->toList();

        return $result;
    }
}
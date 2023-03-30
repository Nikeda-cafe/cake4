<?php
namespace App\Model\Table;

use Cake\Core\Configure;
use App\Model\Table\BaseTable;

class SamplesTable extends BaseTable
{
    public function getIdName()
    {
        $builder = $this->getBuilder();
        $query = $builder->find();
        $columns = [
            'id',
            'name'
        ];
        $query->select($columns);
        $query->where(['is_deleted = ' => Configure::read('NoDeletedFlag')]);
        $result = $query->toList();
        return $result;
    }
}

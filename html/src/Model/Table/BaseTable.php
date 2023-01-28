<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\Validation\Validator;

class BaseTable extends Table
{
    public function insertData(array $colums, array $values)
    {
        $query = $this->query();
        $query->insert($colums);
        $query->values($values);
        $result = $query->execute();

        return $result;
    }
}

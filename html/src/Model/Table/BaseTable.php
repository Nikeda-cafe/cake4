<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

class BaseTable extends Table
{
    private function getTableName(string $classPath)
    {
        $array = explode('\\',$classPath);
        $tableClassName = $array[3] ?? '';
        $tableName = str_replace('Table', '', $tableClassName);

        return $tableName;
    }

    protected function getBuilder()
    {
        $classPath = get_class($this);
        $tableName = $this->getTableName($classPath);
        $builder = TableRegistry::getTableLocator()->get($tableName);
        return $builder;
    }

    public function insertData(array $colums, array $values)
    {
        $query = $this->query();
        $query->insert($colums);
        $query->values($values);
        $result = $query->execute();

        return $result;
    }


}

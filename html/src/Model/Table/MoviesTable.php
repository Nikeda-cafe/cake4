<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Locator\LocatorAwareTrait;
use Cake\Validation\Validator;

class MoviesTable extends Table
{
    public function validationDefault(Validator $validator): Validator
    {
        $validator
        ->requirePresence('title')
        ->notEmptyString('title', 'titleは省略出来ません。')

        ->requirePresence('content')
        ->notEmptyString('content', 'contentは省略出来ません。');

        return $validator;
    }
    public function insertMovieSample()
    {
        $colums = [
            'title',
            'content',
            'stars',
            'created',
        ];
        $values = [
            'title' => 'First post',
            'content' => 'Some body text',
            'stars' => 4,
            'created' => date('Y-m-d G:i:s'),
        ];
        $query = $this->query();
        $query->insert($colums);
        $query->values($values);
        $result = $query->execute();

        return $result;
    }
}

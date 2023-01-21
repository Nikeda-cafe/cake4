<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Locator\LocatorAwareTrait;

class MoviesTable extends Table
{
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

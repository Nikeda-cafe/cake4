<?php

namespace App\Shell;

use Cake\Console\Shell;
use Cake\Datasource\ModelAwareTrait;

/**
 * @property \App\Model\Table\MoviesTable $Movies
 */

class SampleShell extends BaseShell
{
    public function main()
    {
        $colums = [
            'title',
            'content',
            'stars',
        ];
        $values = [
            'title' => 'タイトル',
            'content' => 'こんてんと',
            'stars' => 4,
        ];
        $this->out('これはサンプルです。');
        $result = $this->Movies->insertData($colums, $values);
        if($result){
            $this->success('これは成功です');
        }else{
            $this->out('これは失敗です。');
        }
    }
}

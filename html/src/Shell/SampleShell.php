<?php
 
namespace App\Shell;

use Cake\Console\Shell;
use Cake\Datasource\ModelAwareTrait;
use Cake\ORM\TableRegistry;
class SampleShell extends Shell
{
    use ModelAwareTrait;
    public function main()
    {   
        $this->loadModel('Movies');
        $this->out('これはサンプルです。');
        $result = $this->Movies->insertMovieSample();
        if($result){
            $this->out('これは成功です。');
        }else{
            $this->out('これは失敗です。');
        }
    }
}
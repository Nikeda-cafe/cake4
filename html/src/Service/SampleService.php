<?php
namespace App\Service;

use Cake\Datasource\ModelAwareTrait;

class SampleService{
    use ModelAwareTrait;
    public function xxx()
    {
        $this->loadModel('Articles');
        $returnData = $this->Articles->getArt();

        return $returnData;
    }
}
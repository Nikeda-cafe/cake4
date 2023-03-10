<?php

namespace App\Controller\Component\Services;

use App\Controller\Component\BaseComponent;
use App\Controller\Component\Libraries\MathComponent;
use Cake\Controller\ComponentRegistry;

/**
 * @property \App\Model\Table\ArticlesTable $Articles
 * @property \App\Model\Table\MoviesTable $Movies
 */

class SampleComponent extends BaseComponent
{
    public function sampleOperation($x, $y)
    {
        $this->Math = new MathComponent(new ComponentRegistry());
        $w = $this->Math->doComplexOperation(4,5);
        return $w;
    }

    public function xxx($pg = 1)
    {
        $this->loadModel('Articles');
        $xxx = $this->Articles->getArt($pg);
        $yy = $this->Articles->find()->all();
        $return['xxx'] = $xxx;
        $return['yy'] = $yy;
        return $return;
    }
}

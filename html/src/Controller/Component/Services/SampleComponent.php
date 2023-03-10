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
        $yy = $this->Articles->getTitle();
        $z = [];
        foreach($yy as $v){
            array_push($z,$v->articles_title);
        }
        $return['xxx'] = $xxx;
        $return['yy'] = $z;
        return $return;
    }
}

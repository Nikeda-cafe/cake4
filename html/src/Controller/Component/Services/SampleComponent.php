<?php

namespace App\Controller\Component\Services;

use App\Controller\Component\BaseComponent;

/**
 * @property \App\Model\Table\ArticlesTable $Articles
 * @property \App\Model\Table\MoviesTable $Movies
 */

class SampleComponent extends BaseComponent
{
    public function sampleOperation($x, $y)
    {
        return $x * $y;
    }

    public function xxx($pg = 1)
    {
        $this->loadModel('Articles');
        $xxx = $this->Articles->getArt($pg);
        return $xxx;
    }
}

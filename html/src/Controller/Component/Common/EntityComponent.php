<?php

namespace App\Controller\Component\Common;

use Cake\Controller\Component;
use Cake\Datasource\ModelAwareTrait;
use App\Controller\Component\BaseComponent;

class EntityComponent extends BaseComponent
{
    public function getArticlesEntity()
    {
        return $this->Articles;
    }

    public function getMoviesEntity()
    {
        $this->loadModel('Movies');
        return $this->Movies;
    }
}

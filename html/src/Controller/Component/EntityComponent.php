<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Datasource\ModelAwareTrait;

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

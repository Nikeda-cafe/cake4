<?php
namespace App\Service;

/**
 * @property \App\Model\Table\ArticlesTable $Articles
 * @property \App\Model\Table\MoviesTable $Movies
 */

class SampleService extends BaseService
{
    public function xxx()
    {
        $xxx = $this->Articles->getArt();
        return $xxx;
    }
}

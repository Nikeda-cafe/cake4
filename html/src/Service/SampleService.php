<?php
namespace App\Service;

/**
 * @property \App\Model\Table\ArticlesTable $Articles
 * @property \App\Model\Table\MoviesTable $Movies
 */

class SampleService extends BaseService
{
    public function xxx($pg = 1)
    {
        $xxx = $this->Articles->getArt($pg);
        return $xxx;
    }


}

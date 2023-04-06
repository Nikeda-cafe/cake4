<?php

namespace App\Controller\Component\Libraries;

use Cake\Controller\Component;
use App\Controller\Component\BaseComponent;
use Cake\Cache\Cache;

class CacheComponent extends BaseComponent
{
    public function get($key)
    {
        return Cache::read($key);
    }

    public function set($key,$value,$ttl = null)
    {
        Cache::write($key,$value);
    }
}

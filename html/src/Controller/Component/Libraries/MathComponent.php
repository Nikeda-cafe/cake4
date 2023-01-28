<?php

namespace App\Controller\Component\Libraries;

use Cake\Controller\Component;
use App\Controller\Component\BaseComponent;

class MathComponent extends BaseComponent
{
    public function doComplexOperation($amount1, $amount2)
    {
        return $amount1 + $amount2;
    }
}

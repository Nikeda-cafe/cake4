<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class SampleComponent extends Component
{
    public function doComplexOperation($amount1, $amount2)
    {
        return $amount1 + $amount2;
    }
}

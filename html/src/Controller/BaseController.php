<?php

namespace App\Controller;

use App\Controller\AppController;

class BaseController extends AppController
{
    public function initialize(): void
    {
        $this->setService();
    }
    private function setService()
	{
		$className = $this->request->getParam('controller');
		$serviceClass = 'App\Service\\'. $className . 'Service';
		$this->service = new $serviceClass($serviceClass);
	}
}

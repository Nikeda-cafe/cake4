<?php

namespace App\Controller;

use Cake\Core\Configure;
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

    // テーマ分け
    public function beforeRender(\Cake\Event\EventInterface $event)
    {
        if ($this->request->is('mobile')){
            $this->viewBuilder()->setTheme(Configure::read('theme'));
        }
    }
}

<?php

namespace App\Controller;

use Cake\Core\Configure;
use App\Controller\AppController;

class BaseController extends AppController
{
    public function initialize(): void
    {
        $this->setComponet();
        $this->loadComponent('Entity', [
            'className' => 'Common/Entity'
        ]);
    }
    private function setComponet()
	{
		$className = $this->request->getParam('controller');

        $this->component = $this->loadComponent($className);
	}

    // テーマ分け
    public function beforeRender(\Cake\Event\EventInterface $event)
    {
        if ($this->request->is('mobile')){
            $this->viewBuilder()->setTheme(Configure::read('theme'));
        }
    }
}

<?php
    namespace App\Controller;

    use App\Controller\BaseController;
    use Cake\Cache\Cache;

    /**
     * @property \App\Controller\Component\Services\SampleComponent $Service
     * @property \App\Model\Table\MoviesTable $Movies
     */

    class SampleController extends BaseController
    {
        public function index()
        {
            $this->loadComponent('Math', ['className' => 'Libraries/Math']);
            $w = $this->Math->doComplexOperation(4,5);


            $z = $this->Service->sampleOperation(4,5);

            $pg = $this->request->getParam('pg') ?? 1;
            $region = $this->request->getParam('region') ?? '';

            $resultset = $this->Service->xxx($pg);

            $this->set('w',$w);
            $this->set('text',$z);
            $this->set('item',$resultset);

        }
        public function api()
        {
            $resultset = $this->fetchTable('Articles')->find()->all();
            $this->set(['item'=>$resultset,'_serialize' => ['item']]);
        }

    }


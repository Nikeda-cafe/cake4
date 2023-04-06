<?php
    namespace App\Controller;

    use App\Controller\BaseController;
    use App\Controller\Component\Libraries\CacheComponent;
    use Cake\Controller\ComponentRegistry;
    /**
     * @property \App\Controller\Component\Services\SampleComponent $Service
     * @property \App\Model\Table\MoviesTable $Movies
     */

    class SampleController extends BaseController
    {
        public function index()
        {
            $z = $this->Service->sampleOperation(4,5);

            $pg = $this->request->getParam('pg') ?? 1;
            $region = $this->request->getParam('region') ?? '';

            $resultset = $this->Service->xxx($pg);

            $this->set('w',$z);
            $this->set('text',$z);
            $this->set('item',$resultset['xxx']);
            $this->set('item2',$resultset['yy']);
            $this->set('item3',$resultset['zz']);

        }
        public function api()
        {
            $resultset = $this->fetchTable('Articles')->find()->all();
            $this->set(['item'=>$resultset,'_serialize' => ['item']]);
        }

        public function post()
        {
            $posts = $this->request->getData();

            $result = $this->Service->registPost($posts);
            return $this->redirect(['action' => 'index']);
        }

        public function cache()
        {
            $this->Cache = new CacheComponent(new ComponentRegistry());
            $ca = $this->Cache->get('s');
            dd($ca);
        }

    }


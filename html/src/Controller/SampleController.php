<?php
    namespace App\Controller;

    use App\Controller\BaseController;
    use Cake\Cache\Cache;

    /**
     * @property \App\Service\SampleService $service
     * @property \App\Model\Table\MoviesTable $Movies
     */

    class SampleController extends BaseController
    {

        public function index()
        {
            $pg = $this->request->getParam('pg') ?? 1;
            $region = $this->request->getParam('region') ?? '';

            $resultset = $this->service->xxx($pg);

            $text = 'sample page';

            $this->set('item',$resultset);
            $this->set('text',$text);
        }
        public function api()
        {

            $resultset = $this->fetchTable('Articles')->find()->all();
            $this->set(['item'=>$resultset,'_serialize' => ['item']]);
        }
    }


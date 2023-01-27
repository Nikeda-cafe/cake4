<?php
    namespace App\Controller;

    use App\Controller\BaseController;
    use Cake\Cache\Cache;

    /**
     * @property \App\Controller\Component\SampleComponent $component
     * @property \App\Model\Table\MoviesTable $Movies
     */

    class SampleController extends BaseController
    {
        public function index()
        {
            $z = $this->component->sampleOperation(4,5);
            $pg = $this->request->getParam('pg') ?? 1;
            $region = $this->request->getParam('region') ?? '';

            $resultset = $this->component->xxx($pg);

            $this->set('text',$z);
            $this->set('item',$resultset);

        }
        public function api()
        {

            $resultset = $this->fetchTable('Articles')->find()->all();
            $this->set(['item'=>$resultset,'_serialize' => ['item']]);
        }

    }


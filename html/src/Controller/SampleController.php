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

            // Cache::write("2000", 1515);
            $redis_read = Cache::read("2000");

            //読みだしたキャッシュが有効か

            $x = $this->request->getQuery();
            if($x){
                $this->set('text',$x['xxx']);
            }else{
                $this->set('text','none');
            }


            $resultset = $this->service->xxx();

            $text = 'sample page';


            $this->set('item',$resultset);
            $this->set('cache',$redis_read);
        }
        public function api()
        {

            $resultset = $this->fetchTable('Articles')->find()->all();
            $this->set(['item'=>$resultset,'_serialize' => ['item']]);
        }
    }


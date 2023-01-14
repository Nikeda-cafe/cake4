<?php
    namespace App\Controller;

    use App\Controller\AppController;
    use Cake\Cache\Cache;
    use App\Service\SampleService;

    class SampleController extends AppController
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

            $instance = new SampleService();

            $resultset = $instance->xxx();
    
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


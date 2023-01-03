<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class SampleController extends AppController
    {

        public function index()
        {
            $resultset = $this->fetchTable('Articles')->find()->all();

            $text = 'sample page';
    
            $this->set('text',$text);
            $this->set('item',$resultset);
        }
    }


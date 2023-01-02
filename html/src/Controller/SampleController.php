<?php
    namespace App\Controller;

    use App\Controller\AppController;

    class SampleController extends AppController
    {

        public function index()
        {
            $text = 'sample page';
    
            $this->set('text',$text);
        }
    }


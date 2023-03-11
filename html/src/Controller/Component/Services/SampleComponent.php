<?php

namespace App\Controller\Component\Services;

use App\Controller\Component\BaseComponent;
use App\Controller\Component\Libraries\MathComponent;
use App\Controller\Component\Libraries\ValidationComponent;
use Cake\Controller\ComponentRegistry;
use Cake\Validation\Validator;


/**
 * @property \App\Model\Table\ArticlesTable $Articles
 * @property \App\Model\Table\MoviesTable $Movies
 */

class SampleComponent extends BaseComponent
{
    public function sampleOperation($x, $y)
    {
        $this->Math = new MathComponent(new ComponentRegistry());
        $w = $this->Math->doComplexOperation(4,5);
        return $w;
    }

    public function xxx($pg = 1)
    {
        $this->loadModel('Articles');
        $xxx = $this->Articles->getArticles($pg);
        $yy = $this->Articles->getTitle();
        $z = [];
        foreach($yy as $v){
            array_push($z,$v->articles_title);
        }
        $return['xxx'] = $xxx;
        $return['yy'] = $z;
        return $return;
    }

    public function registPost(array $post)
    {
        $this->loadModel('Samples');
        $entity = $this->Samples->newEmptyEntity();
        $this->Validator = new ValidationComponent(new ComponentRegistry());
        $errors = $this->Validator->titleValidation($post);

        if (empty($errors)) {
            $entity->name = $post['aaa'];
            $entity->text = 'text';
            $entity->age = 24;
            $entity->mail_address = 'fsfs@vsv';
            $entity->created = date('Ymd');

            if ($this->Samples->save($entity)) {
                // $article エンティティーは今や id を持っています
                $id = $entity->id;
                $this->redirect([]);
            }
            return $id ?? '';
        }else{

            return $errors;
        }
    }


}

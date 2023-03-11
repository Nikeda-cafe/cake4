<?php
namespace App\Controller\Component\Libraries;
use Cake\Controller\Component;
use App\Controller\Component\BaseComponent;
use Cake\Validation\Validator;

class ValidationComponent extends BaseComponent{
    public function titleValidation($post)
    {
        $validator = new Validator();
        $validator
        ->requirePresence('aaa')
        ->notEmptyString('aaa', 'このフィールドに入力してください')
        ->add('aaa', [
            'length' => [
                'rule' => ['minLength', 10],
                'message' => 'タイトルは 10 文字以上必要です',
            ]
        ]);

        $errors = $validator->validate($post);

        return $errors;
    }


}

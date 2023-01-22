<style>
  h1 {
    margin-left: 10px;
    font-size: 18px;
  }
</style>
<h1>
  members add
</h1>
<div class="form_wrap">
<?php
  // フォーム開始
  echo $this->Form->create($member, [
    'type' => 'post',
    'url' => ['controller' => 'Members', 'action' => 'add'],
  ]);
  echo $this->Form->control('_csrfToken', ['type' => 'hidden', 'value' => $this->request->getAttribute('csrfToken')]);

  // hidden の生成
  // echo $this->Form->control('test', ['type' => 'hidden', 'value' => 12345]);

  // 一般的なテキスト入力
  echo $this->Form->control('name', ['label' => '一般的なテキスト','required' => false]);

  // // メールアドレス
  // echo $this->Form->control('email', ['type' => 'email', 'label' => 'メールアドレス']);

  // // パスワード
  // echo $this->Form->control('password', ['label' => 'パスワード']);

  // // 数値のみの入力
  // echo $this->Form->control('age', ['type' => 'number', 'label' => '数値のみ', 'required' => true, 'min' => 20, 'max' => 100]);

  // // ラジオボタン
  // echo $this->Form->control('gender', [
  //   'type' => 'radio',
  //   'label' => 'ラジオボタン',
  //   'required' => true,
  //   'options' => [
  //     1 => '女性',
  //     2 => '男性',
  //     3 => 'その他'
  //   ],
  // ]);

  // // セレクトボックスで使うoptionの定義
  // $list = [
  //   [ 'text' => '北海道', 'value' => 1 ],
  //   [ 'text' => '東京都', 'value' => 2 ],
  //   [ 'text' => '大阪府', 'value' => 3 ],
  //   [ 'text' => '福岡県', 'value' => 4 ],
  //   [ 'text' => '沖縄県', 'value' => 5 ],
  // ];

  // // セレクトボックス
  // echo $this->Form->control('birthplace', [
  //   'type' => 'select',
  //   'label' => 'セレクトボックス',
  //   'required' => true,
  //   'options' => $list,
  //   'multiple' => false,
  //   'empty' => '選択してください'
  // ]);

  // // 日時入力
  // echo $this->Form->control('birth_at', [
  //   'type' => 'datetime',
  //   'label' => '日時',
  //   'required' => true,
  //   'monthNames' => false,
  //   'minYear' => date('Y'),
  //   'maxYear' => date('Y')+1,
  // ]);

  // // チェックボックス
  // echo $this->Form->control('checkbox_1', ['type' => 'checkbox', 'label' => '通知を受け取らない']);
  // echo $this->Form->control('checkbox_2', ['type' => 'checkbox', 'label' => '申し込む']);

  // 送信ボタン
  echo $this->Form->submit();

  // フォーム終了
  echo $this->Form->end();
  ?>
</div>

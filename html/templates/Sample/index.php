<?php echo $text; ?>
<?php foreach($item as $i): ?>
    <span class="xxx"><?php echo $i->title; ?></span><span class="xxx"><?php echo $i->tag_name; ?></span>
<?php endforeach; ?>

<?php
    echo $this->Form->create($movie, [
        'type' => 'post',
        'url' => ['controller' => 'Sample', 'action' => 'index'],
    ]);
    echo $this->Form->control('_csrfToken', ['type' => 'hidden', 'value' => $this->request->getAttribute('csrfToken')]);
    echo $this->Form->control('title', ['label' => '一般的なテキスト','required' => false]);
    echo $this->Form->control('content', ['label' => '一般的なテキスト','required' => false]);
    // 送信ボタン
    echo $this->Form->submit();

    // フォーム終了
    echo $this->Form->end();
?>

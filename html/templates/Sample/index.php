<?php echo $text; ?>
<?php foreach($item as $i): ?>
    <span class="xxx"><?php echo $i->title; ?></span><span class="xxx"><?php echo $i->tag_name; ?></span>
<?php endforeach; ?>
<p><a href="/xxx/pg/2/">ghkgkkhg</a></p>

<?php
        echo $this->Form->create($movie, [
            'type' => 'post',
            'url' => ['controller' => 'Sample', 'action' => 'index'],
        ]);

        echo $this->Form->control('title', ['label' => '一般的なテキスト','required' => false]);
        echo $this->Form->control('content', ['label' => '一般的なテキスト','required' => false]);
        // 送信ボタン
        echo $this->Form->submit();

        // フォーム終了
        echo $this->Form->end();
?>

<?php echo $text; ?>
<?php foreach($item as $i): ?>
    <span class="xxx"><?php echo $i->title; ?></span><span class="xxx"><?php echo $i->tag_name; ?></span>
<?php endforeach; ?>


<form action="xxx/post" method="post">
    <input
        type="hidden" name="_csrfToken" autocomplete="off"
        value="<?= $this->request->getAttribute('csrfToken') ?>
    ">
    <div>title</div>
    <input type="text" name="title">
    <div>content</div>
    <input type="text" name="content">
    <input type="submit" value="post" >
</form>

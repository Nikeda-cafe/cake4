<?php echo $text; ?>
<?php echo $cache; ?>
<?php foreach($item as $i): ?>
    <span class="xxx"><?php echo $i->title; ?></span><span class="xxx"><?php echo $i->tag_name; ?></span>
<?php endforeach; ?>

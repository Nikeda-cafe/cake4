<?php echo $text; ?>
<?php echo $cache; ?>
<?php foreach($item as $i): ?>
    <p><?php echo $i->title; ?></p>
<?php endforeach; ?>
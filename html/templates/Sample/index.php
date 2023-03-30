<?php echo $text; ?><br>
<?php echo $w; ?>
<?php foreach($item as $i): ?>
    <span class="xxx"><?php echo $i->title; ?></span><span class="xxx"><?php echo $i->tag_name; ?></span>
<?php endforeach; ?>
<br>
<?php print_r($item2); ?>
<?php foreach($item2 as $j): ?>
    <span><?php echo $j; ?></span>
<?php endforeach; ?>
<?php foreach($item3 as $x): ?>
    <p><?php echo $x['id']; ?>:<?php echo $x['name']; ?></p>
<?php endforeach; ?>

<p><a href="/xxx/pg/2/">ghkgkkhg</a></p>


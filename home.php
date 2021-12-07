<?php foreach (Database\Table\Item::getLast() as $item) : ?> 
<h2><a href="<?php echo ($post->getUrl())?>"><? echo ($post->titre); ?></a></h2>
    <p><?php echo ($post->getDescription())?></p>
<?php endforeach; ?>

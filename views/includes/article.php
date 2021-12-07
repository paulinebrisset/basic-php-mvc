<?php
$post= $instancePdo->prepare('SELECT * FROM items WHERE id=?', [$_GET['id']], 'Database\Table\Item');
?>
<h1><?php echo ($post->titre)?></h1>
<p><?php echo ($post->description)?></p>
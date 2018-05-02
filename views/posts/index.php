<h2> all posts </h2>

<?php  
    foreach ($posts as $post) { ?>
      <br/> <?php echo $post->author;?> <a  href='show/<?php echo $post->id;?>'>see content </a> 

<?php }?>


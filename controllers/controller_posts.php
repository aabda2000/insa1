<?php
  class PostsController {

    public function __construct(){}

    public function index() {
      echo "in index";
      $post = new Post();
      $posts=$post->all();
      require_once('views/posts/index.php');

    }

    public function show() {

      if (!isset($_GET['id'])) return call('pages', 'error');      
      $po= new Post();
      $post=$po->find($_GET['id']);
      require_once('views/posts/show.php');

   }
 }
?>

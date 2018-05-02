<?php

    class Post {

     public $id;
     public $author;
     public $content;

    public function __construct($id,$author,$content) {

       $this->id =$id;
       $this->author=$author;
       $this->content=$content;

    } //end construct

    public function all() {
        //echo " in all function ";
   
        $list=array();
        $con=DBConnect::getInstance();//static method

        $posts= $con->query('SELECT * FROM posts');
        
        foreach ($posts as $post)
            $list[]= new Post($post['id'],$post['author'], $post['content']);
        //var_dump($list);
        return $list;
     
     }
    public function find($id) {
      $con=DBConnect::getInstance();
      $id= intval($id);
      $req=$con->prepare('SELECT * FROM posts where id=:id');
      $req->execute(array('id'=>$id));
      $post=$req->fetch();
      return new Post($post['id'], $post['author'],$post['content']);

    }
    

}//end class Post

?>


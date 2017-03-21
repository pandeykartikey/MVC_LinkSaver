<?php
  namespace  Link\Controllers;
  use Link\Models\Post;
  class ShowController extends BaseController{
    public function get(){
      $posts=Post::show();
      $this->render('show.html',['posts'=>$posts]);
      }
    }
?>

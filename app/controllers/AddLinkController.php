<?php
  namespace  Link\Controllers;
  use Link\Models\Post;
  class AddLinkController extends BaseController{
    public function get(){
      $this->render('addLink.html');
    }
    public function post(){
      {$link=$_POST['link'];
      echo "Your link was Added";
      Post::addLink($link);
      $this->render('addLink.html');
    }
  }
}
?>

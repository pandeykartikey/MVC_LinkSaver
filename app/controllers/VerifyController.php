<?php
  namespace  Link\Controllers;
  use Link\Models\Post;
  class VerifyController extends BaseController{
    public function post(){
      $name=$_POST['name'];
      $pass=$_POST['psw'];
      if(Post::verify($name,$pass)){
        $this->render('dashboard.html',['post'=>$name]);
      }else{
        $this->render('login.html');
      }
    }
  }
?>

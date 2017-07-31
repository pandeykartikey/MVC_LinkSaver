<?php
  namespace  Link\Controllers;
  use Link\Models\Post;
  class AddController extends BaseController{
    public function post(){
      $name=$_POST['name'];
      $pass=$_POST['psw'];
      if($name==null||$pass==null){
        $this->render('register.html');
      }
      Post::add($name,$pass);
      $this->render('dashboard.html',['post'=>$name]);
    }
  }
?>

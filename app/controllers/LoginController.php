<?php
  namespace  Link\Controllers;
  class LoginController extends BaseController{
    public function get(){
      session_start();
      $_SESSION["name"]=null;
      $this->render('login.html');
    }
  }
?>

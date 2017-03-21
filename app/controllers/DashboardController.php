<?php
  namespace  Link\Controllers;
  class DashboardController extends BaseController{
    public function get(){
      session_start();
      if($_SESSION["name"]==null)
        $this->render('login.html');
      else
        $this->render('dashboard.html',['post'=>$_SESSION["name"]]);
    }
  }
?>

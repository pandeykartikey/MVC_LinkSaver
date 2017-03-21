<?php
  namespace Link\Controllers;
  class BaseController{
    private $twig;
    function __construct(){
      $loader = new \Twig_Loader_Filesystem(__DIR__."/../views");
      $this->twig = new \Twig_Environment($loader);
    }
    protected function render($view , $data = []){
      echo $this->twig->render($view,$data);
    }
  }

?>

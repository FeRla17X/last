<?php

  spl_autoload_register("auto_class_loader");
  function auto_class_loader($class_name){
    $url = $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
    if(strpos($url) == "include"){
      $path = "../library/".$class_name.".class.php";
    }
    else{
      $path = "library/".$class_name.".class.php";
    }
    if(!file_exists($path)){
      return "CLASS NOT FOUND";
    }
    include_once $path;
  }

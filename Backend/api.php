<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files

include './article_controller.php';
  
// initialize object
$product = new ArticleController("GET");
$product->processRequest();
  
// read products will be here

?>
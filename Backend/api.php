<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include './article_controller.php';

$req_method = $_SERVER['REQUEST_METHOD'];
  
$controller = new ArticleController($req_method);
$controller->processRequest();
  
?>
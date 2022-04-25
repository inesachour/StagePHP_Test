<?php
include 'dbconnection.php';

class ArticleRepository {

    protected $bd;

    public function __construct(){
        $this->bd = DBConnection::getInstance();
    }

    public function findAll() {
        $request = "select * from article";
        $response =$this->bd->prepare($request);
        $response->execute([]);
        return $response->fetchAll(PDO::FETCH_OBJ);
    }

}
?>
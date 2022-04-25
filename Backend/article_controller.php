<?php

include './article_repository.php';

class ArticleController {
    private $requestMethod;
    private $articleRepo;


    public function __construct($requestMethod)
    {
        $this->requestMethod = $requestMethod;
        $this->articleRepo = new ArticleRepository();
    }

    public function processRequest()
    {
        switch ($this->requestMethod) {
            case 'GET':
                $result = $this->articleRepo->findAll();
                $response['status_code_header'] = 'HTTP/1.1 200 OK';
                $response['body'] = json_encode($result);
                break;
            default:
                $response = $this->notFoundResponse();
                break;
        }
        header($response['status_code_header']);
        if ($response['body']) {
            echo $response['body'];
        }
    }
   
}
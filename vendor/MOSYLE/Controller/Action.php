<?php

namespace MOSYLE\Controller;

use http\Client\Response;

abstract class Action
{
    protected $jsonView;
    protected $action;

    public function __construct()
    {
        $this->jsonView = new \stdClass();
    }

    /**
     * @param $data
     * @param null $statusCode
     */
    protected function json($data, $statusCode = null)
    {
        header("Content-type: application/json; charset=utf-8");

        if(!$statusCode){
            http_response_code(200);

        }else{
            http_response_code($statusCode);
        }
        echo json_encode($data);
    }

    protected function content()
    {
        $current = get_class($this);

        return strtolower((str_replace("Controller","",str_replace("Api\\Controllers\\","", $current))));

        $this->json();

    }
}
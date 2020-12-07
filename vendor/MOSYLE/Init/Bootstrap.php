<?php

namespace MOSYLE\Init;

abstract class Bootstrap
{
    private $routes;

    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    /**
     * @return mixed
     */
    abstract protected function initRoutes();

    /**
     * Get the controller path
     * @param $url
     */
    protected function run($url)
    {
        array_walk($this->routes, function ($route) use ($url){

            if($url == $route['route'] && $route['method'] == $_SERVER['REQUEST_METHOD']){
                $class = "Api\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
            else{
                $url_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
                $id = pathinfo($url_path, PATHINFO_BASENAME);
                if($route['method'] == $_SERVER['REQUEST_METHOD'] && $id){
                    $class = "Api\\Controllers\\".ucfirst($route['controller']);
                    $controller = new $class;
                    $action = $route['action'];
                    $controller->$action($id);

                }
            }
        });
    }

    /**
     * @param array $routes
     */
    protected function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    /**
     * Get url
     * @return array|false|int|string|null
     */
    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}
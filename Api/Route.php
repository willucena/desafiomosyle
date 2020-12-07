<?php

namespace Api;

use MOSYLE\Init\Bootstrap;

class Route extends Bootstrap
{

    //Metodo para criar rotas
    protected function initRoutes()
    {
        $routes['auth'] = ['route'=>'/login', 'controller'=>"AuthController",'action'=>'login','method' => 'POST'];
        $routes['list'] = ['route'=>'/users', 'controller'=>"UserController",'action'=>'index','method' => 'GET'];
        $routes['store'] = ['route'=>'/users', 'controller'=>"UserController",'action'=>'store', 'method' => 'POST'];
        $routes['update'] = ['route'=>'/users/id', 'controller'=>"UserController",'action'=>'update', 'method' => 'PUT'];
        $routes['delete'] = ['route'=>'/users/id', 'controller'=>"UserController",'action'=>'delete', 'method' => 'DELETE'];


        $this->setRoutes($routes);
    }



}
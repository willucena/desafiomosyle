<?php


namespace Api\Controllers;

use MOSYLE\Controller\Action;
use MOSYLE\DI\Container;

class UserController extends Action
{
    private $entity;

    public function __construct()
    {
        $this->entity = Container::getEntity('User');
    }
    public function index(){
        $user = $this->entity;
        $users= $user->fetchAll();
        $response = $this->json($users, 201);

        return $response;

    }

    public function store(){

        $_POST = file_get_contents('php://input');
        $data = json_decode($_POST);

        $user = $this->entity;
        $users= $user->save($data);
        $response = $users;

        return $response;

    }


    public function update($id){

        try{
            $_POST = file_get_contents('php://input');
            $data = json_decode($_POST);
            $user = $this->entity;
            $user->update($id,$data);

            $users= $user->find($id);
            $users = [
                'message'=> 'Successful registration',
                'user' => $users
            ];
            $response = $this->json($users, 200);

        }catch (\Exception $exception){
            $response = $exception->getMessage();
        }


        return $response;

    }

    public function delete($id){

        $user = $this->entity;
        $users= $user->delete($id);
        $response = $users;

        return $response;
    }


}
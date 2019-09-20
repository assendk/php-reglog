<?php

class Users extends Controller {
//    protected function index(){
//        $viewmodel = new UserModel();
//        $this->returnView($viewmodel->Index(), true);
//    }

    protected function register(){
        $newVar = ['aaa' => 'test3'];
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->register(), true, ['newVar' => $newVar]);
    }

    protected function countries(){
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->countries(), true);
    }

    protected function login(){
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->login(), true);
    }
}
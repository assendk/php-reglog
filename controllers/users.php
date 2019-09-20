<?php

class Users extends Controller {
//    protected function index(){
//        $viewmodel = new UserModel();
//        $this->returnView($viewmodel->Index(), true);
//    }

    protected function register(){
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->register(), true);
    }
}
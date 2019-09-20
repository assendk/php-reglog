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

    protected function countries(){
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->countries(), true);
    }
}
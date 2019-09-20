<?php

class Users extends Controller {
//    protected function index(){
//        $viewmodel = new UserModel();
//        $this->returnView($viewmodel->Index(), true);
//    }

    protected function register(){
        $country_req = new AddressModel();
        $country_list = $country_req->countriesList();

        $viewmodel = new UserModel();
        $this->returnView($viewmodel->register(), true, ['countryList' => $country_list]);
    }

    protected function countries(){
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->countries(), true);
    }

    protected function login(){
        $viewmodel = new UserModel();
        $this->returnView($viewmodel->login(), true);
    }

    protected function logout(){
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();
        // Redirect
        header('Location: '.ROOT_URL);
    }
}
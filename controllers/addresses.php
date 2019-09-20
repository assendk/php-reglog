<?php

class Addresses extends Controller {
    protected function index(){
        $viewmodel = new AddressModel();
        $this->returnView($viewmodel->Index(), true);
    }
}
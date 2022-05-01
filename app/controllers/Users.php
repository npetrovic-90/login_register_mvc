<?php

class Users extends Controller{

    public function __construct(){
        $this->userModel=$this->Model('User');
    }

    public function login(){
        $data=[
            'title'=>'Login Page'
        ];

        $this->view('users/login',$data);
    }
}
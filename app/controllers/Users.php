<?php

class Users extends Controller{

    public function __construct(){
        $this->userModel=$this->Model('User');
    }
    public function index(){

        $this->view('users/register');
    }
    public function login(){
        $data=[
            'title'=>'Login Page',
            'usernameError'=>'',
            'passwordError'=>''
        ];

        $this->view('users/login',$data);
    }
}
<?php
class Login extends controller {
    public function index(){
        if(isset($_SESSION['userlogin'])){
            $this->view('admin/posts','');
        }
        else{
           $this->view('admin/login','');
        }
        if(isset($_POST['password'])){
            $this->model('login');
            $auth = new Auth;
            $auth->login($_POST['password']);
        }
    }
}
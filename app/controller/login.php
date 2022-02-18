<?php
//yeni post elave etmek ucun admin panele giris sehifesi
class Login extends controller {
    public function index(){
        // eger user login olubsa admin panele yonlendir
        if(isset($_SESSION['userlogin'])){
            $this->view('admin/posts','');
        }
        else{
           $this->view('admin/login','');
        }
        //form`dan gelen post isteyi
        if(isset($_POST['password'])){
            $this->model('login');
            $auth = new Auth;
            $auth->login($_POST['password']);
        }
    }
}
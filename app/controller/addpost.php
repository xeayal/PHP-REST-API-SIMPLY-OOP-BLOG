<?php
class addpost extends Controller {
    public function index(){
        if(isset($_POST['addPost'])){
            $this->model('post');
            $post = new PostData;
            $name = htmlspecialchars($_POST['name']);
            $text = htmlspecialchars($_POST['text']);
            $img = $_FILES['img'];
            $add = $post->addPost($name, $text, $img);
            if($add){
                echo '<script>alert("ELAVE EDILDI")</script>';
            }
        }
        if(isset($_SESSION['userlogin'])){
            $this->view('admin/addpost','');

        }
        else{
           $login = $this->model('login');
           new Auth;
           Auth::notSession();
        }
    }
}
<?php
//admin panelin ana sehifesi
class Admin extends Controller {
     public function index(){
         if(isset($_SESSION['userlogin'])){
            $this->model('post');
            $posts = new PostData;
            $posts = $posts->allPosts();
            $this->view('admin/posts', $posts);

        }
        else{
           $login = $this->model('login');
           new Auth;
           Auth::notSession();
        }
     }
}
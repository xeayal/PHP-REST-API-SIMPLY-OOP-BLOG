<?php
class Post extends Controller {

    public function index($url){
        $this->model('post');
        $posts = new PostData();
        
        //view`e data gondermek
        $this->view('post', $posts->getPost($url));
    }
}
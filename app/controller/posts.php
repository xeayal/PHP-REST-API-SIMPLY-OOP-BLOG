<?php
//user terefde butun paylasimlarin listelendiyi sehife
class Posts extends Controller {
    public $page = 1;

     public function index($page=1){
        $this->model('post');
        $posts = new PostData();
        
        if($page){
            $this->page = $page;
        }
        
        //view`e data gondermek
        $this->view('posts', 
            [
                'posts'=>$posts->getPosts($this->page), //post modelinden gelen sehifeye uygun paylasim datalari
                'maxPage'=> ceil($posts->countPost()/6), //bazada olan postlarin sayina gor maksimum sehifelerin sayi
                'activePage'=>$this->page //aktiv sehife
            ]);

        
    }
    

}
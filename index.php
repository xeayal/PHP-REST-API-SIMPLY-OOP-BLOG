<?php
session_start();
ob_start();

define("PATH","http://localhost/metakMVC/");

require_once __DIR__. '/app/init.php';

$url = htmlspecialchars($_GET['url']);

//get`den eger data gelmirse `home` qebul et
if($url == ''){
    $url = 'home';
}

new Router($url);

Router::get("home",    "home/index");
Router::get("login",   "login/index");
Router::get("logout",  "logout/index");

Router::get("admin", function(){
    global $url;
    $page = explode('/', $url)[1];
    if($page == 'addpost'){
        require_once 'app/controller/addpost.php';
        $tt = new $page();
        $tt -> index();
    }
    elseif($page == 'posts' || $page == ''){
        require_once 'app/controller/admin.php';
        $tt = new Admin();
        $tt -> index();
    }


});

Router::get('posts', function(){
    global $url;
    $pagination  = explode('/', $url)[1];
    require_once 'app/controller/posts.php';
    $class = new posts();
    $class -> index($pagination);
});

Router::get('post', function(){
    global $url;
    $url  = explode('/', $url)[1];
    require_once 'app/controller/post.php';
    $class = new post();
    $class -> index($url);
});
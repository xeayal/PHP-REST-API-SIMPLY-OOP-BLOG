<?php
class PostData extends Connect {

    //postlari sayiriq
    public function countPost(){
        $sql = 'SELECT * FROM posts';
        $posts = $this-> db()->query($sql);
        return count($posts->fetchAll());
    }

    // sehifeye gore posta gedirik
    public function getPosts($page){
        $totalPost = $this->countPost();
        // her sehifede istediyimiz post sayi
        $limit = 6;
        // maksimum nece sehifelik post var
        $maxPage = ceil($totalPost/$limit);

        if($maxPage < $page){
            header('location:404.php');
        }
        else{
            $minLimit = ($page - 1)*$limit;

            $sql = 'SELECT *FROM posts ORDER BY id DESC LIMIT '.$minLimit.','.$limit.'';
            $posts = $this-> db()->query($sql);
            return $allPosts = $posts->fetchAll();
        }

    }

    //butun postlari cagirmaq
     public function allPosts(){
        $sql = 'SELECT *FROM posts';
        $post = $this-> db()->query($sql);
        return $post = $post->fetchAll();
        
    }

    //url ile postu tapmaq
    public function getPost($url){
        $sql = 'SELECT *FROM posts WHERE url = ?';
        $post = $this-> db()->prepare($sql);
        $post->execute([$url]);
        $post = $post->fetch();
        if($post){
            return $post;
        }
        else{
            header('location:404.php');
        }
    }
    //paylasim ucun post edilen şekli servere upload etmek
    public static function fileUpload($file){
        $fileFormat = pathinfo($file['name'],PATHINFO_EXTENSION);
        $fileName = $file['name'] = uniqid().'.'.$fileFormat;
        $uploadTo = 'app/view/img/'.$fileName;

        if(move_uploaded_file($file["tmp_name"], $uploadTo)){
            return $uploadTo;
        }
    }

    //yeni post elave etmek
    public function addPost($name, $text, $img){

        $img = self::fileUpload($img);
        $sql = 'INSERT INTO posts SET postTitle = ?, postText = ?, url = ?, image = ?';
        $addpost = $this->db()->prepare($sql);
        $add = $addpost ->execute([$name, $text, seo($name), $img]);
        if($add){
            return true;
        }
        else {
            return false;
        }
    }

    
}
<?php
//baza baglantisini daxil edek
require_once 'config.php';

//bazaya yeni post elave etmek ucun class
class DB extends Config {
    //bazaya yeni post elave etmek
    public function insert($name, $text, $img){
        //seo funksiyasi ile postun basligini url`ye uygun sekle getiririk
        $url = $this->seo($name);
        $sql = 'INSERT INTO posts SET postTitle = ?, postText = ?, url = ?, image = ?';
        $addpost = $this->db()->prepare($sql);
        $add = $addpost -> execute([$name, $text, $url, $img]);
        if($add){
	        return true;
        }
        else{
	        return false;
        }
    }
}
<?php
class Config {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'metak';

    // baza baglantisi
    protected function db(){
        try {
           $db = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname.';charset=utf8', $this->user, $this->pass);
           $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           return $db;
        } catch (PDOExeption $e) {
           echo 'Xəta: '.$e;
        }
    }

    //gelen inputu control etmek
    public static function test_input($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = strip_tags($data);
        return $data;
    }

     // erorun JSON Formatina çevirmek funksiyasi
	  public function message($content, $status) {
	    return json_encode(['message' => $content, 'error' => $status]);
	  }

    //stringi url`e uygun formata getirmek
    public function seo($text){
        $find = array('Ç', 'Ş', 'Ə', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ə', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#','.');
        $replace = array('c', 's', 'e', 'g', 'u', 'i', 'o', 'c', 'e', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp','-');
        $text = strtolower(str_replace($find, $replace, $text));
        $text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
        $text = trim(preg_replace('/\s+/', ' ', $text));
        $text = str_replace(' ', '-', $text);
        return $text;
        }
    
    //post edilen seklin servere upload olunmasi ve url`nin response edilmesi
    public function fileUpload($file){
        $fileFormat = pathinfo($file['name'],PATHINFO_EXTENSION);
        $fileName = $file['name'] = uniqid().'.'.$fileFormat;
        $uploadTo = 'app/view/img/'.$fileName;

        if($fileFormat  == 'jpg' || $fileFormat  == 'jpeg' || $fileFormat  == 'png' || $fileFormat  == 'webp'){
            if(move_uploaded_file($file["tmp_name"], $uploadTo)){
                return $uploadTo;
            }
        }
        
    }
}





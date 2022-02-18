<?php
//CORS
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: X-Requested-With');
header('Content-Type: application/json');


require_once 'db.php';

// DB class`ni cagiririq
$post = new DB;

// gelen isteyin methodunu müeyyen edirik
$api = $_SERVER['REQUEST_METHOD'];

//post methodu ile daxil ola melumatlari bazaya gondermek
if ($api == 'POST') {
	$name = DB::test_input($_POST['name']);
	$text = DB::test_input($_POST['text']);
    $img = $post->fileUpload($_POST['img']);
    $insert = $post->insert($name, $text, $img);
	if ($insert) {
		echo $post->message('UĞURLA ƏLAVƏ EDİLDİ',false);
	} else {
		echo $post->message('XƏTA: ƏLAVƏ EDİLMƏDİ',true);
	}
}
else{
	//post methodundan ferqli method ile istek gonderildikde
	$error = $post->message('UYĞUN OLMAYAN İSTƏK',true);
	print_r(json_encode($error)) ;
}
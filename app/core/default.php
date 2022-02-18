<?php
function beautyDate($date){
    $d = date("d", strtotime($date));
    $m = date("m", strtotime($date));
    $y = date("Y", strtotime($date));
    $s = date("h", strtotime($date));
    $i = date("i", strtotime($date));

    $m = $m - 1;
    $months = ['Yanvar', 'Fevral', 'Mart', 'Aprel', 'May', 'İyun', 'İyul', 'Avqust', 'Sentyabr', 'Oktyabr', 'Noyabr', 'Dekabr'];

    return $d.' '.$months[$m] .' '.$y.' '.$s.':'.$i; //Ekim
}

function seo($text){
$find = array('Ç', 'Ş', 'Ə', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ə', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#','.');
$replace = array('c', 's', 'e', 'g', 'u', 'i', 'o', 'c', 'e', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp','-');
$text = strtolower(str_replace($find, $replace, $text));
$text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
$text = trim(preg_replace('/\s+/', ' ', $text));
$text = str_replace(' ', '-', $text);
return $text;
}
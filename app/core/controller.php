<?php
//view ve model sehifelerini idare etmek ucun controller
class Controller extends Config{
    public function view($view, $data){
        require_once 'app/view/' . $view . '.view.php';
    }
    public function model($model){
        require_once 'app/model/' . $model . '.model.php';
    }
}
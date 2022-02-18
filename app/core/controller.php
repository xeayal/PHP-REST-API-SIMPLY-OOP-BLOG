<?php
class Controller extends Connect{
    public function view($view, $data){
        require_once 'app/view/' . $view . '.view.php';
    }
    public function model($model){
        require_once 'app/model/' . $model . '.model.php';
    }
}
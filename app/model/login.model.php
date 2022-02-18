<?php
class Auth extends Controller {
    public static function notSession(){
        header('location:http://localhost/metakMVC/login');
    }
    public function login($password){
        $sql = 'SELECT *FROM users WHERE password = ?';
        $user = $this-> db()->prepare($sql);
        $user->execute([md5($password)]);
        $user = $user->fetch();
        if($user){
           $_SESSION['userlogin'] = $user['id'];
           header('location:http://localhost/metakMVC/admin');
        }
    }
}
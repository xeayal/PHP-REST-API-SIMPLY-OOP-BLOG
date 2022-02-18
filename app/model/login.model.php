<?php
class Auth extends Controller {
    //eger user login olmayibsa login sehifesine yonlendirme
    public static function notSession(){
        header('location:' . PATH . 'login');
    }

    //post methodu ile gelen `password`u bazarda sorgulmaq 
    public function login($password){
        $sql = 'SELECT *FROM users WHERE password = ?';
        $user = $this-> db()->prepare($sql);
        $user->execute([md5($password)]);
        $user = $user->fetch();
        //eger bele hesab varsa sessiyaya elave et ve admin sehifesine gonder
        if($user){
           $_SESSION['userlogin'] = $user['id'];
           header('location:' . PATH . 'admin');
        }
        //eger sifre yanlisdirsa alert ver
        else{
            echo '<script>alert("ŞİFRƏ YANLIŞDIR")</script>';
        }
    }
}
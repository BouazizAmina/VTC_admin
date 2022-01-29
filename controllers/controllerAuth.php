<?php
require_once('./models/modelAuth.php');
class controllerAuth{

    function loginController(){
        $model = new modelAuth();
        $err = $model -> loginModel();
        return $err;
    }
}
?>
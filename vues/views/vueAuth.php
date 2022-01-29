<?php
require_once('./controllers/controllerAuth.php');
class vueAuth{
    function loginVue(){
        $model = new controllerAuth();
        $err = $model ->loginController();
        return $err;
    }
}
?>
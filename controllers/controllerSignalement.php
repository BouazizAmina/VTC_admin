<?php
require_once('../models/modelSignalement.php');
class controllerSignalement{
    function getSignalement(){
        $model = new modelSignalement();
        $card = $model ->getSignalement();
        return $card;
    }

    function getAnnonceController($id){
        $model = new modelSignalement();
        $ann = $model ->getAnnonceModel($id);
        return $ann;
    }

    function texteSign($id){
        $model = new modelSignalement();
        $ann = $model ->texteSign($id);
        return $ann;
    }

    function infoUser($id,$t){
        $model = new modelSignalement();
        $ann = $model ->infoUser($id,$t);
        return $ann;
    }
}
?>
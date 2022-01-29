<?php
require_once('../models/modelContenu.php');
class controllerContenu{
    function modifPresController(){
        $model = new modelContenu();
        $err = $model ->modifPresModel();
        return $err;
    }

    function getInfoController(){
        $model = new modelContenu();
        $card = $model ->getInfoModel();
        return $card;
    }

    function modifContactController(){
        $model = new modelContenu();
        $err = $model ->modifContactModel();
        return $err;
    }

    function contactInfoController(){
        $model = new modelContenu();
        $card = $model ->contactInfoModel();
        return $card;
    }

    function critereController(){
        $model = new modelContenu();
        $card = $model ->critereModel();
        return $card;
    }

    function choixController($nom){
        $model = new modelContenu();
        $card = $model ->choixModel($nom);
    }

}
?>
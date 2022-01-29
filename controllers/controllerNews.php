<?php
require_once('../models/modelNews.php');
class controllerNews{
    function setAjoutNewsController(){
        $model = new modelNews();
        $err = $model ->setAjoutNewsModel();
        return $err;
    }

    function getCardNewsController(){
        $model = new modelNews();
        $card = $model ->getCardNewsModel();
        return $card;
    }

    function modifNewsController($id){
        $model = new modelNews();
        $msg = $model ->modifNewsModel($id);
        return $msg;
    }
}
?>
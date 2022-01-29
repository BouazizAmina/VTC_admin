<?php
require_once('../models/modelClient.php');
class controllerClient{
    function getClientController(){
        $model = new modelClient();
        $card = $model ->getClientModel();
        return $card;
    }

    function TrierNomController(){
        $model = new modelClient();
        $card = $model ->TrierNomModel();
        return $card;
    }

    function TrierPrenomController(){
        $model = new modelClient();
        $card = $model ->TrierPrenomModel();
        return $card;
    }

    function FiltrerNomController($nom){
        $model = new modelClient();
        $card = $model ->FiltrerNomModel($nom);
        return $card;
    }

    function FiltrerPrenomController($nom){
        $model = new modelClient();
        $card = $model ->FiltrerPrenomModel($nom);
        return $card;
    }
}
?>
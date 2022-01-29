<?php
require_once('../models/modelTransporteur.php');
class controllerTransporteur{
    function getTransporteurController(){
        $model = new modelTransporteur();
        $card = $model ->getTransporteurModel();
        return $card;
    }

    function TrierNomController(){
        $model = new modelTransporteur();
        $card = $model ->TrierNomModel();
        return $card;
    }

    function TrierPrenomController(){
        $model = new modelTransporteur();
        $card = $model ->TrierPrenomModel();
        return $card;
    }

    function FiltrerNomController($nom){
        $model = new modelTransporteur();
        $card = $model ->FiltrerNomModel($nom);
        return $card;
    }

    function FiltrerPrenomController($nom){
        $model = new modelTransporteur();
        $card = $model ->FiltrerPrenomModel($nom);
        return $card;
    }
}
?>
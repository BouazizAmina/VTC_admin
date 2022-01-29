<?php
require_once('../models/modelAnnonce.php');
class controllerAnnonce{
    function getAnnonceController(){
        $model = new modelAnnonce();
        $card = $model ->getAnnonceModel();
        return $card;
    }

    function TrierTitreController(){
        $model = new modelAnnonce();
        $card = $model ->TrierTitreModel();
        return $card;
    }

    function TrierDateController(){
        $model = new modelAnnonce();
        $card = $model ->TrierDateModel();
        return $card;
    }

    function FiltrerEtatController($nom){
        $model = new modelAnnonce();
        $card = $model ->FiltrerEtatModel($nom);
        return $card;
    }

    function FiltrerDateController($nom){
        $model = new modelAnnonce();
        $card = $model ->FiltrerDateModel($nom);
        return $card;
    }

    function FiltrerClientController(){
        $model = new modelAnnonce();
        $card = $model ->FiltrerClientModel();
        return $card;
    }

    function FiltrerTransporteurController(){
        $model = new modelAnnonce();
        $card = $model ->FiltrerTransporteurModel();
        return $card;
    }

    function wilController($nom){
        $model = new modelAnnonce();
        $card = $model ->wilModel($nom);
        return $card;
    }

    function userController($nom){
        if($nom == 1){echo "Client";}
        else{echo "Transporteur";}
    }

    function archiveController($nom){
        if($nom == 1){echo "oui";}
        else{echo "non";}
    }
}
?>
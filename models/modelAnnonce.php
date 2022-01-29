<?php
require_once('model.php');
class modelAnnonce{
    function getAnnonceModel(){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `annonce`";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $card = $stmt->fetchAll();
        return $card;
    }

    function TrierTitreModel(){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `annonce` ORDER BY titre";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $card = $stmt->fetchAll();
        return $card;
    }

    function TrierDateModel(){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `annonce` ORDER BY `date`";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $card = $stmt->fetchAll();
        return $card;
    }





    function FiltrerEtatModel($nom){
        $model = new model();
        $conn = $model -> connexion();
        try{
        $request = "SELECT * FROM `annonce` where etat = ?";
        $stmt = $conn->prepare($request);
        $stmt->execute(array($nom));
        $card = $stmt->fetchAll();
        return $card;
        }catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
        }
    }

    function FiltrerClientModel(){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `annonce` where type_user = 1";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $card = $stmt->fetchAll();
        return $card;
    }

    function FiltrerTransporteurModel(){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `annonce` where type_user = 0";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $card = $stmt->fetchAll();
        return $card;
    }

    function FiltrerDateModel($nom){
        $model = new model();
        $conn = $model -> connexion();
        try{
        $request = "SELECT * FROM `annonce` where `date` = ?";
        $stmt = $conn->prepare($request);
        $stmt->execute(array($nom));
        $card = $stmt->fetchAll();
        return $card;
        }catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
        }
    }

    function wilModel($nom){
        $model = new model();
        $conn = $model -> connexion();
        try{
        $request = "SELECT * FROM `wilaya` where id_wilaya = ?";
        $stmt = $conn->prepare($request);
        $stmt->execute(array($nom));
        $card = $stmt->fetch();
        return $card;
        }catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
        }
    }

}
?>
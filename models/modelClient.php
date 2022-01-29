<?php
require_once('model.php');
class modelClient{
    function getClientModel(){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `client`";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $card = $stmt->fetchAll();
        return $card;
    }

    function TrierNomModel(){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `client` ORDER BY nom";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $card = $stmt->fetchAll();
        return $card;
    }

    function TrierPrenomModel(){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `client` ORDER BY prenom";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $card = $stmt->fetchAll();
        return $card;
    }

    function FiltrerNomModel($nom){
        $model = new model();
        $conn = $model -> connexion();
        try{
        $request = "SELECT * FROM `client` where nom = ?";
        $stmt = $conn->prepare($request);
        $stmt->execute(array($nom));
        $card = $stmt->fetchAll();
        return $card;
        }catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
        }
    }

    function FiltrerPrenomModel($nom){
        $model = new model();
        $conn = $model -> connexion();
        try{
        $request = "SELECT * FROM `client` where prenom = ?";
        $stmt = $conn->prepare($request);
        $stmt->execute(array($nom));
        $card = $stmt->fetchAll();
        return $card;
        }catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
        }
    }

}
?>
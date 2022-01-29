<?php
require_once('model.php');
class modelSignalement{
    function getSignalement(){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `signalement`";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $card = $stmt->fetchAll();
        return $card;
    }

    function getAnnonceModel($id){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `annonce` where`id_annonce` = $id";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $ann = $stmt->fetch();
        return $ann;
    }

    function texteSign($id){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `signalement` where`id_signalement` = $id";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $ann = $stmt->fetch();
        return $ann;
    }

    function infoUser($id,$t){
        $model = new model();
        $conn = $model -> connexion();
        if($t == 0){$request = "SELECT * FROM `transporteur` where`id_transporteur` = $id";}
        else{$request = "SELECT * FROM `client` where`id_client` = $id";}
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $ann = $stmt->fetch();
        return $ann;
    }
}
?>
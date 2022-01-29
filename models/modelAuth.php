<?php
require_once('model.php');
class modelAuth{
    function loginModel(){
        $model = new model();
        $conn = $model -> connexion();
        try{
            if(isset($_POST["login"])){
                $msg = "";
                $request = "SELECT * FROM `admin` WHERE `username`= :username AND `mdp`= :mdp";
                $stmt = $conn->prepare($request);
                $stmt->bindValue( ":username", $_POST["username"], PDO::PARAM_STR );
                $stmt->bindValue( ":mdp",($_POST["mdp"]), PDO::PARAM_STR );
                $stmt->execute();
                $user=$stmt->fetch();
                $count = $stmt->rowCount();
                // echo $user;
                // echo $count;
                if($count == 1){
                    $_SESSION["id"]= $user['id_admin'];
                    if(isset($_SESSION["id"])){       
                        header("location:vues/pagePrincipale.php");
                    }
                }
                else{
                    $msg="Informations erronées";
                }
                return $msg;
            }
            
        }catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
        } 
    }

}?>
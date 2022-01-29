<?php
require_once('model.php');
class modelNews{
    function setAjoutNewsModel(){
        $model = new model();
        $conn = $model -> connexion();
        try{
            // echo $_POST['titre'];
            if(isset($_POST["ajouterNews"])){
                $titre = htmlspecialchars($_POST['titre']);
                $texte = htmlspecialchars($_POST['texte']);
                $lien = htmlspecialchars($_POST['lien']);
                $date = htmlspecialchars($_POST['date']);
                // if(isset($_FILES['file'])){
                $filename = $_FILES["image"]["name"]; 
                $folder = "../assets/news/".$filename;
                // }else{
                //     echo "ee";
                //     $folder="dfggh";
                // }
                // echo $_FILES["image"]["name"];
                $request = "INSERT INTO `news`(`titre`, `texte`, `image` ,`lien`, `date_ajout`) VALUES (?,?,?,?,?)";
                $stmt = $conn->prepare($request);
                $stmt->execute(array($titre, $texte, $folder,$lien, $date));
                $erreur = "Votre news a bien été ajoutée !";
                return $erreur;
                    // }

            }
        }catch (PDOException $e) {
            echo "Error : ".$e->getMessage();
        }
    }

    function getCardNewsModel(){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `news`";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $card = $stmt->fetchAll();
        return $card;
    }

    function modifNewsModel($id){
        $model = new model();
        $conn = $model -> connexion();
        $msg="";
        try{
            if(isset($_POST["modifNews"])){
            $titre=$_POST["titre"];
            $texte=$_POST["texte"];
            $date_ajout=$_POST["date_ajout"];
            
            $request= "UPDATE news SET titre= '$titre', texte= '$texte', date_ajout= '$date_ajout' where id_news= $id LIMIT 1";
            $stmt = $conn->prepare($request);
            $stmt->execute();
            $msg="Done";
            }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
            return $msg;
    }
}
?>
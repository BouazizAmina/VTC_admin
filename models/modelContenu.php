<?php
require_once('model.php');
class modelContenu{

    function getInfoModel(){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `presentation`";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $card = $stmt->fetch();
        return $card;
    }

    function modifPresModel(){
        $model = new model();
        $conn = $model -> connexion();
        $value = $this->getInfoModel();
        $msg="";
        try{
            if(isset($_POST["modifPre"])){
                $lien=$_POST["lien"];
                if($lien == null){$lien=$value['video'];}
                $texte=$_POST["texte"];
                if($texte == null){$texte=$value['texte'];}
                $filename = $_FILES["image"]["name"]; 
                $folder = "../assets/news/".$filename;
                if($filename == null){$folder = $value['image'];}
                $request= "UPDATE presentation SET `texte`= ?, `image`= ? ,`video`= ? LIMIT 1";
                $stmt = $conn->prepare($request);
                $stmt->execute(array($texte, $folder, $lien));
                $msg="La page presentation a ete mis a jour";
                return $msg;
            }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function contactInfoModel(){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `contact`";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $card = $stmt->fetch();
        return $card;
    }

    function modifContactModel(){
        $model = new model();
        $conn = $model -> connexion();
        $value = $this->contactInfoModel();
        $msg="";
        try{
            if(isset($_POST["modifContact"])){
                $adresse=$_POST["adresse"];
                if($adresse == null){$adresse=$value['adresse'];}

                $tel=$_POST["tel"];
                if($tel == null){$tel=$value['tel'];}
                
                $mail=$_POST["mail"];
                if($mail == null){$mail=$value['mail'];}

                $skype=$_POST["skype"];
                if($skype == null){$skype=$value['skype'];}

                $request= "UPDATE contact SET `adresse`= ?, `tel`= ? ,`mail`= ?, `skype`= ? LIMIT 1";
                $stmt = $conn->prepare($request);
                $stmt->execute(array($adresse, $tel, $mail, $skype));
                $msg="La page contact a ete mis a jour";
                return $msg;
            }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    function critereModel(){
        $model = new model();
        $conn = $model -> connexion();
        $request = "SELECT * FROM `critere_sel_annonce`";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $card = $stmt->fetchAll();
        // echo $card;
        return $card;
    }
    function choixModel($nom){
        $model = new model();
        $conn = $model -> connexion();
        $request = "UPDATE critere SET annonce = ? LIMIT 1 ";
        $stmt = $conn->prepare($request);
        $stmt->execute(array($nom));
        $card = $stmt->fetchAll();
        // echo $card;
        return $card;
    }
}
?>
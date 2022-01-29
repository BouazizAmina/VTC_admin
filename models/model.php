<?php
class model{
    function connexion(){
        $servername="localhost";
        $username="root";
        $password="";
        $db="TDW";
        try{
            $conn= new PDO("mysql:host=$servername;dbname=$db", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $conn;
    }

    function deconnexion(&$conn){
        $conn=null;
    }

    function getWilayaModel(){
        $conn = $this -> connexion();
        $request = "SELECT * FROM `wilaya`";
        $stmt = $conn->prepare($request);
        $stmt->execute();
        $wil = $stmt->fetchAll();
        // echo $wil[1];
        return $wil;
    }

}
?>
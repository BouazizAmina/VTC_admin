<?php
require_once('../models/model.php');
try{
    $model = new model();
    $conn = $model -> connexion();
    $id=$_GET['id'];
    //echo $id;
    $sql1="SELECT * from annonce where id_annonce= $id LIMIT 1";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->execute();
    $info = $stmt1->fetch();
    // echo $info['depart'];

    $sql2="SELECT * from tarif where depart = ? and arrive = ?";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute(array($info['depart'],$info['arrive']));
    $tarif = $stmt2->fetch();
    // echo $tarif;

    $request= "UPDATE annonce set valide = 1 , tarif = ? where id_annonce= $id LIMIT 1";
    $stmt = $conn->prepare($request);
    $stmt->execute(array($tarif['tarif']));
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">
        <link rel="stylesheet" href="../node_modules/bootstrap-select/dist/css/bootstrap-select.min.css">
        <title>VTC</title>
    </head>
<body>
<?php 
$message = "Annonce a été bien validé";
echo "<script type='text/javascript'>alert('$message');location.href = 'Annonce.php';</script>";

     ?>
<body>
<html>
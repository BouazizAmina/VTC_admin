<?php
require_once('../models/model.php');
require_once('views/vueNews.php');
$id=$_GET['id'];
try{
    $model = new model();
    $conn = $model -> connexion();
    
    // echo $id;
    $sql = "SELECT * FROM news WHERE `id_news` =  $id ";
    $stm=$conn->query($sql); 
    $cultures = $stm->fetch();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}   
$vueNews = new vueNews();
$msg = $vueNews -> modifNewsVue($id);

?>


<html lang="en">
<?php
require_once('views/vue.php');
    $vue = new vue();
    $vue->entete_page();
    ?>
<body>
<center><h3 style="color: #8ca9d3;">Modification d'une news</h3></center>
<!-- <h1>MODIFICATION D'UNE NEWS</h1> -->
<form class="col-12 col-sm-4 mx-auto" method="POST">

    <div class="form-group" >
        <input type="hidden" name="id1" value="<?= $cultures['id_news'] ?>"/>
        <div class="form-element">
            <label for="titre">Titre</label>
            <input name="titre" class="form-control" value="<?= $cultures['titre']?>"/>
        </div>
        <div class="form-element">
            <label for="texte">Texte</label>
            <input name="texte" class="form-control" value="<?= $cultures['texte']?>"/>
        </div>
        <div class="form-element" >
            <label for="date_ajout">Date d'ajout</label>
            <input name="date_ajout" class="form-control" value="<?= $cultures['date_ajout']?>"/>
        </div>
        <button  type="submit" class="btn btn-primary mt-3"  name="modifNews">Modifier</button>
    </div>
</form> 
<?php 
    if($msg=='Done'){
        echo"
        <script>
        alert('News a été bien modifié ');
        location.href = 'News.php';
        </script>";
    }
 ?>

<body>
<html>
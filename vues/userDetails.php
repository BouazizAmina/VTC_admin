<!DOCTYPE html>
<html lang="en">
<?php
    // session_start();
    require_once('views/vue.php');
    require_once('views/vueSignalement.php');
    
    $vue = new vue();
    $vue -> entete_page();

    $vueSignalement = new vueSignalement();
    $id=$_GET['id'];
    $t=$_GET['type'];
?>
<body>
    <?php $vue-> nav();?>

    <div class="container">
        <div class="row pt-5 pt-sm-0">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="Signalement.php">Signalement</a></li>
                <li class="breadcrumb-item">Détails utilisateur</li>
            </ol>
        </div>

        <div class="row row-content">
            <div class="col-12 d-flex justify-content-center">
                <div>
                    <?php $vueSignalement ->infouser($id,$t);?>
                </div>
            </div>
        </div> 
    </div>

    <?php
        $vue -> scripts();
    ?>
</body>
</html>
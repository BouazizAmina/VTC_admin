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
?>
<body>
    <?php $vue-> nav();?>

    <div class="container">
        <div class="row pt-5 pt-sm-0">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="Signalement.php">Signalement</a></li>
                <?php $vueSignalement ->getTitre1Annonce($id);?>
            </ol>
            <div class="col-12">
                <?php $vueSignalement ->getTitre2Annonce($id);?>
               <hr>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-12 col-sm-6 d-flex justify-content-center">
                <div>
                    <?php $vueSignalement ->infoAnnonce($id);?>
                </div>
            </div>
            <div class="col-12 col-sm-6 justify-content-center">
                <div class="card ">
                    <?php $vueSignalement ->descAnnonceC($id);?>
                </div>
            </div>
        </div> 
    </div>

    <?php
        $vue -> scripts();
    ?>
</body>
</html>
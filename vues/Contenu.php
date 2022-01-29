<html lang="en">
<?php
    require_once('views/vue.php');
    $vue = new vue();
    $vue->entete_page();
    require_once('views/vueContenu.php');
    $vueContenu = new vueContenu();
    $err = $vueContenu -> modiPreVue();
    $info = $vueContenu -> getInfoVue();
    $info1 = $vueContenu -> contactInfoVue();
    $err1 = $vueContenu -> modiContactVue();
    $vueContenu -> choixVue();
?>
<body>
    <nav class="navbar navbar-dark navbar-expand-md fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto offset-1 offset-sm-0" href="pagePrincipale.php"><img src="../assets/logo3.png"  width="100px"></a>
            <div class="collapse navbar-collapse offset-1" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item "><a class="nav-link" href="Annonce.php">Getsion annonce</a></li>
                    <li class="nav-item"><a class="nav-link" href="News.php">Gestion news</a></li>
                    <li class="nav-item"><a class="nav-link" href="Signalement.php">Gestion Signalement</a></li>
                    <li class="nav-item"><a class="nav-link" href="Utilisateurs.php">Gestion Utilisateurs</a></li>
                    <li class="nav-item active"><a class="nav-link" href="Contenu.php">Gestion Contenu</a></li>
                </ul>
            </div>         
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5 mt-sm-0">
            <div class="col-12">
               <h3 >Modifier le contenu de la page description</h3>
               <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p style="color:red;"><?php echo "$err";?></p>
                <form class="mb-5" method="POST" enctype="multipart/form-data">
                
                    <div class="form-group row ">
                        <label class="col-sm-3 col-form-label" for="texte"><strong>Texte descriptif</strong></label>
                        <div class="col-sm-5 ">
                            <input type="text" class="form-control" id="texte" name="texte" placeholder="Texte" value="<?= $info['texte']?>" >
                        </div>   
                    </div> 

                    <div class="form-group row ">
                        <label class="col-sm-3 col-form-label" for="image"><strong>Image</strong></label>
                        <div class="col-sm-5 ">
                            <input type="file" class="form-control" id="image" name="image" placeholder="Image de l'annonce" >
                        </div>   
                    </div>

                    <div class="form-group row ">
                        <label class="col-sm-3 col-form-label" for="lien"><strong>Lien de la video</strong></label>
                        <div class="col-sm-5 ">
                            <input type="text" class="form-control" id="lien" name="lien" placeholder="Lien"  value="<?= $info['video']?>">
                        </div>   
                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-10">
                            <button type="submit" name="modifPre" class="btn btn-primary" >Modifier</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row mt-5 mt-sm-0">
            <div class="col-12">
               <h3 >La sélection des annonces à publier</h3>
               <hr>
            </div>
        </div>
        <div class="row ">
            <form method="POST" class="form-inline mx-auto">
                <div class="form-group row">
                    <div class="col-sm-5"> 
                        <select name="selection[]" id="selection">
                            <?php $vueContenu->critereVue();?>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-3 col-sm-10">
                        <button type="submit" name="choix" class="btn btn-sm btn-primary" >OK</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- <div class="row">
            <?php ?>
        </div>
        <div class="row">
            <?php $vueClient->TrierVue();?>
            <?php $vueClient->Filtrage();?>
        </div>
        <div class="row">
            <?php $vueClient->FiltrerVue();?>
        </div>

        <h3 class="mt-5">Liste de tout les clients<h3>
        <?php $vueClient->getClientsVue();?> -->

    </div>

    <?php $vue -> scripts(); ?>
</body>
</html>
<?php
$m=new accueil();
$m->afficher_site();
class accueil{
    function afficher_site(){?>
        <!DOCTYPE html>
        <html lang="en">
        <?php
            session_start();
            session_destroy();
            require_once('views/vue.php');
            $vue = new vue();
            $vue->entete_page();
        ?>
        <body>
            <?php $vue -> nav();?>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 mt-sm-0 mt-5">
                        <div class="card">
                            <center><h4>Gestion des annonces</h4></center>
                            <div class="card-body" > 
                                <a href="Annonce.php"><img style="width:100%; height:100%" src="../assets/1.jpg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 ">
                        <div class="card">
                        <center><h4>Gestion des news</h4></center>
                            <div class="card-body" > 
                                <a href="News.php"><img style="width:100%; height:100%" src="../assets/2.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 mt-sm-0 mt-5">
                        <div class="card">
                        <center><h4>Gestion des signalements</h4></center>
                            <div class="card-body" > 
                                <a href="Signalement.php"><img style="width:100%; height:100%" src="../assets/3.jpg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 ">
                        <div class="card">
                        <center><h4>Gestion des utilisateurs</h4></center>
                            <div class="card-body" > 
                                <a href="Utilisateurs.php"><img style="width:100%; height:100%" src="../assets/1.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 mt-sm-0 mt-5">
                        <div class="card">
                        <center><h4>Gestion du contenu</h4></center>
                            <div class="card-body" > 
                                <a href="Contenu.php"><img style="width:100%; height:100%" src="../assets/2.jpg"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php $vue -> scripts(); ?>
        </body>
        </html><?php
}
}
?>

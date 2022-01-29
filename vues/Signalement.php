<html lang="en">
<?php
    require_once('views/vue.php');
    require_once('views/vueSignalement.php');
    $vue = new vue();
    $vueAnnonce = new vueSignalement();
    $vue->entete_page();
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
                    <li class="nav-item active"><a class="nav-link" href="Signalement.php">Gestion Signalement</a></li>
                    <li class="nav-item "><a class="nav-link" href="Utilisateurs.php">Gestion Utilisateurs</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contenu.php">Gestion Contenu</a></li>
                </ul>
            </div>         
        </div>
    </nav>

    <div class="container ">
        <h3 class="mt-5">Les signalements des clients sur les transporteurs<h3>
        <div class="mt-5 ">
            <?php $vueAnnonce->getSignalementC();?>
        </div>

        <h3 class="mt-5">Les signalements des transporteurs sur les clients<h3>
        <div class="mt-5">
            <?php $vueAnnonce->getSignalementT();?>
        </div>

    </div>

    <?php $vue -> scripts(); ?>
</body>
</html>
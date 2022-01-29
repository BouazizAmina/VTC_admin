<html lang="en">
<?php
    require_once('views/vue.php');
    require_once('views/vueTransporteur.php');
    $vue = new vue();
    $vueTransporteur = new vueTransporteur();
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
                    <li class="nav-item"><a class="nav-link" href="Signalement.php">Gestion Signalement</a></li>
                    <li class="nav-item active"><a class="nav-link" href="Utilisateurs.php">Gestion Utilisateurs</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contenu.php">Gestion Contenu</a></li>
                </ul>
            </div>         
        </div>
    </nav>

    <div class="container">
        <div class="row pt-5 pt-sm-0">
            <ol class="col-12 breadcrumb">
                <li class="breadcrumb-item"><a href="Utilisateurs.php">Utilisateur</a></li>
                <li class="breadcrumb-item active">Transporteur</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <form method="POST" class="form-inline mx-auto">
                <div class="form-group row">
                    <div class="col-sm-5"> 
                        <select name="selection[]" id="selection">
                            <option value="0">Fitrer</option>
                            <option value="1">Trier</option>
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
        <div class="row">
            <?php $vueTransporteur -> choixVue();?>
        </div>
        <div class="row">
            <?php $vueTransporteur->TrierVue();?>
            <?php $vueTransporteur->Filtrage();?>
        </div>
        <div class="row">
            <?php $vueTransporteur->FiltrerVue();?>
        </div>
        <h3 class="mt-5">Liste de tout les tansporteurs<h3>
        <?php $vueTransporteur->getTansporteursVue();?>

    </div>

    <?php $vue -> scripts(); ?>
</body>
</html>
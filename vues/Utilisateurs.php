<html lang="en">
<?php
    require_once('views/vue.php');
    $vue = new vue();
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
        <div class="row">
            <div class="col-12 col-sm-6 mt-sm-0 mt-5">
                <div class="card">
                    <center><h4>Gestion des clients</h4></center>
                    <div class="card-body" > 
                        <a href="client.php"><img style="width:100%; height:100%" src="../assets/1.jpg"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 ">
                <div class="card">
                <center><h4>Gestion des transporteurs</h4></center>
                    <div class="card-body" > 
                        <a href="transporteur.php"><img style="width:100%; height:100%" src="../assets/2.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $vue -> scripts(); ?>
</body>
</html>
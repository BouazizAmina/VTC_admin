<html lang="en">
<?php
    require_once('views/vue.php');
    require_once('views/vueNews.php');
    $vue = new vue();
    $vue->entete_page();
    $vueNews = new vueNews();
    $err = $vueNews -> setAjoutNewsVue();
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
                    <li class="nav-item active"><a class="nav-link" href="News.php">Gestion news</a></li>
                    <li class="nav-item"><a class="nav-link" href="Signalement.php">Gestion Signalement</a></li>
                    <li class="nav-item"><a class="nav-link" href="Utilisateurs.php">Gestion Utilisateurs</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contenu.php">Gestion Contenu</a></li>
                </ul>
            </div>         
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5 mt-sm-0">
            <div class="col-12">
               <h3 >Ajouter news </h3>
               <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p style="color:red;"><?php echo "$err";?></p>
                <form class="mb-5" method="POST" enctype="multipart/form-data">
                
                    <div class="form-group row ">
                        <label class="col-sm-3 col-form-label" for="titre"><strong>Titre</strong></label>
                        <div class="col-sm-5 ">
                            <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre" required value="<?php if(isset($_POST['titre'])){echo $_POST['titre'];}?>" >
                        </div>   
                    </div> 

                     <div class="form-group row ">
                        <label class="col-sm-3 col-form-label" for="texte"><strong>Texte</strong></label>
                        <div class="col-sm-5 ">
                            <input type="text" class="form-control" id="texte" name="texte" placeholder="Texte" required value="<?php if(isset($_POST['texte'])){echo $_POST['texte'];}?>">
                        </div>   
                    </div>

                    <div class="form-group row ">
                        <label class="col-sm-3 col-form-label" for="image"><strong>Image</strong></label>
                        <div class="col-sm-5 ">
                            <input type="file" class="form-control" id="image" name="image" placeholder="Image du news" required >
                        </div>   
                    </div>
                    <p class="col-sm-5 offset-sm-3" >**Lien fonctionnel pour plus de details**</p>
                    <div class="form-group row ">
                        <label class="col-sm-3 col-form-label" for="lien"><strong>Lien </strong></label>
                        <div class="col-sm-5 ">
                            <input type="text" class="form-control" id="lien" name="lien" placeholder="Lien"  value="<?php if(isset($_POST['lien'])){echo $_POST['lien'];}?>">
                        </div>   
                    </div>

                    <div class="form-group row">
                        <label for="date" class="col-sm-3 col-form-label"><strong>Date d'ajout</strong></label>
                        <div class="col-sm-5">
                            <input type="date" class="form-control" id="date" name="date" placeholder="Date d'ajout" required value="<?php if(isset($_POST['date'])){echo $_POST['date'];}?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-10">
                            <button type="submit" name="ajouterNews" class="btn btn-primary" >Ajouter</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="container">
    <h3>Liste des news<h3>
    <?php $vueNews->getCardNewsVue();?>
    </div>

    <?php $vue -> scripts(); ?>
</body>
</html>
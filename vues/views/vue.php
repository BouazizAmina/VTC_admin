<?php
class vue{
    function entete_page(){?>
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
        </head><?php 
    }

    function scripts(){?>
        <script src="../node_modules/jquery/dist/jquery.slim.min.js"></script>
        <script src="../node_modules/jquery/dist/jquery.min.js"></script>
        <script src="../node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../node_modules/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="../js/scripts.js"></script><?php
    }

    function nav(){?>
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
                    <li class="nav-item"><a class="nav-link" href="Contenu.php">Gestion Contenu</a></li>
                </ul>
            </div>         
        </div>
    </nav><?php
    }
}  
?>
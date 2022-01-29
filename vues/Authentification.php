<?php
class authentification{
    function afficher_site(){?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="./css/style.css" type="text/css">
            <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="./node_modules/font-awesome/css/font-awesome.min.css">
            <link rel="stylesheet" href="./node_modules/bootstrap-social/bootstrap-social.css">
            <link rel="stylesheet" href="./node_modules/bootstrap-select/dist/css/bootstrap-select.min.css">
            <title>VTC</title>
        </head>
        <?php
            require_once('views/vue.php');
            require_once('views/vueAuth.php');
            $vue = new vue();

            $vueAuth = new vueAuth();
            $err= $vueAuth -> loginVue(); 

        ?>
        <body>
        <form class="col-12 col-sm-4 mx-auto" method="POST">
            <center><img src="./assets/logo3.png"  width="300px"></center>
            <center><h3 style="color: #8ca9d3;">Connexion</h3></center>
            <div class="form-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enterer votre nom d'utilisateur" required>
            </div>
            <div class="form-group">
                <label for="mdp">Mot de Passe</label>
                <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Enter votre mot de passe" required>
            </div>
            <button type="submit" class="btn btn-primary" name="login">Submit</button>
            <p style="color:red;"><?php echo $err ;?></p>
        </form>
        
            <?php $vue -> scripts();?>
        </body>
        </html><?php
}
}
?>







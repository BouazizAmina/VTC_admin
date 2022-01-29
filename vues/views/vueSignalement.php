<?php
require_once('../controllers/controllerSignalement.php');
class vueSignalement{

    function getSignalementT(){
        $model = new ControllerSignalement();
        $cards = $model ->getSignalement();?>
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" colspan="3">Utilisateur qui a émis le signalement</th>
                <th scope="col" rowspan="2">Id_annonce</th>
                <th scope="col" colspan="1">Utilisateur mis en cause le signalement</th>
                <th scope="col" rowspan="2">Texte du signalement</th>
            </tr>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Type</th>
                <th scope="col">Id</th>
            </tr>

        </thead>
        <tbody><?php
        foreach($cards as $card){
            if($card['id_client'] != null){
            ?>
            <tr>
                <th scope="row">
                    <h6><a href="userDetails.php?id=<?=$card ['id_utilisateur']?>&type=<?=$card['type_user']?>"><?=$card ['id_utilisateur']?></a></h6>
                </th>
                <td>
                    <h6><?= $card['nom_utilisateur'] ?></h6>
                </td>
                <td>
                    <?php if($card['type_user'] == 1){$t = "Client";}
                    else{$t = "Transporteur";}?>
                    <h6><?= $t?></h6>
                </td>
                <td>
                    <h6><a href="annonceDetails.php?id=<?=$card ['id_annonce']?>"><?=$card ['id_annonce']?></a></h6>
                </td>
                <td>
                    <h6><a href="userDetails.php?id=<?=$card ['id_client']?>&type=1"><?=$card ['id_client']?></a></h6>
                </td>
                <td>
                    <h6><?= substr($card ['texte_signalement'],0,20);?><a href="signDetails.php?id=<?=$card ['id_signalement']?>"> lire la suite</a></h6>
                </td>
            </tr><?php 
            }
        } ?>
        </tbody>
        </table><?php 
    }

    function getSignalementC(){
        $model = new ControllerSignalement();
        $cards = $model ->getSignalement();?>
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col" colspan="3">Utilisateur qui a émis le signalement</th>
                <th scope="col" rowspan="2">Id_annonce</th>
                <th scope="col" colspan="2">Utilisateur mis en cause le signalement</th>
                <th scope="col" rowspan="2">Texte du signalement</th>
            </tr>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Type</th>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
            </tr>

        </thead>
        <tbody><?php
        foreach($cards as $card){
            if($card['id_transporteur'] != null){
            ?>
            <tr>
                <th scope="row">
                    <h6><a href="userDetails.php?id=<?=$card ['id_utilisateur']?>&type=<?=$card['type_user']?>"><?=$card ['id_utilisateur']?></a></h6>
                </th>
                <td>
                    <h6><?= $card['nom_utilisateur'] ?></h6>
                </td>
                <td>
                    <?php if($card['type_user'] == 1){$t = "Client";}
                    else{$t = "Transporteur";}?>
                    <h6><?= $t?></h6>
                </td>
                <td>
                    <h6><a href="annonceDetails.php?id=<?=$card ['id_annonce']?>"><?=$card ['id_annonce']?></a></h6>
                </td>
                <td>
                    <h6><a href="userDetails.php?id=<?=$card ['id_transporteur']?>&type=0?>"><?=$card ['id_transporteur']?></a></h6>
                </td>
                <td>
                    <h6><?=$card ['nom_transporteur']?></h6>
                </td>
                <td>
                    <h6><?= substr($card ['texte_signalement'],0,20);?><a href="signDetails.php?id=<?=$card ['id_signalement']?>"> lire la suite</a></h6>
                </td>
            </tr><?php 
            }
        } ?>
        </tbody>
        </table><?php 
    }

    function getTitre1Annonce($id){
        $model = new ControllerSignalement();
        $news = $model ->getAnnonceController($id);?>
        <li class="breadcrumb-item active"><?=$news ['titre']?></li><?php
    }
    function getTitre2Annonce($id){
        $model = new ControllerSignalement();
        $news = $model ->getAnnonceController($id);?>
        <h3><?=$news ['titre']?></h3><?php
    }
    function infoAnnonce($id){
        $model = new ControllerSignalement();
        $news = $model ->getAnnonceController($id);?>
        <table class="table table-striped">
            <tr>
                <td>
                    <h6>Moyen de transport</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['moyen_transport']?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Points de départ</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['depart']?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Points d’arrivée</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['arrive']?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Type de transport</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['type_transport']?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Poid</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['poid']?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Volume</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['volume']?></h6>
                </td>
            </tr>
            
        </table><?php
    }
    function descAnnonceC($id){
        $model = new ControllerSignalement();
        $news = $model ->getAnnonceController($id);?>
        <div class="card-body">
            <h4>Description de l'annonce</h4>
            <p ><?=$news ['texte']?></p>
        </div><?php
    }

    function texteSign($id){
        $model = new ControllerSignalement();
        $news = $model ->texteSign($id);?>
        <div class="card-body">
            <h4 class="text-center">Texte du signalement</h4>
            <p ><?=$news ['texte_signalement']?></p>
        </div><?php
    }

    function infoUser($id,$t){
        $model = new ControllerSignalement();
        $news = $model ->infoUser($id,$t);?>
        <table class="table table-striped">
            <tr>
                <td>
                    <h6>Nom</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['nom']?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Prenom</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['prenom']?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Adresse</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['adresse']?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Numero de telephone</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['tel']?></h6>
                </td>
            </tr>
            <?php if($t == 0){?>
            <tr>
                <td>
                    <h6>Wilaya de départ</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['wilayasD']?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Wilaya d'arrivée</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['wilayasA']?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Status</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['status']?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Note</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['note']?></h6>
                </td>
            </tr>
            <tr>
                <td>
                    <h6>Gain</h6>
                </td>
                <td>
                    <h6 style="color:#f26659"><?=$news ['gain']?></h6>
                </td>
            </tr>
            <?php }?>
            
        </table><?php
    }

}
?>
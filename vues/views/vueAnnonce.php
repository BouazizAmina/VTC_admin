<?php
require_once('../controllers/controllerAnnonce.php');
class vueAnnonce{
    function table($cards){
        $model = new ControllerAnnonce();?>
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">wilaya de depart</th>
                <th scope="col">wilaya d'arrivee</th>
                <th scope="col">Type de transport</th>
                <th scope="col">Moyen de transport</th>
                <th scope="col">Poid</th>
                <th scope="col">Volume</th>
                <th scope="col">Type d'utilisateur</th>
                <th scope="col">Date</th>
                <th scope="col">Etat</th>
                <th scope="col">Archivée?</th>
            </tr>
        </thead>
        <tbody><?php
        foreach($cards as $card){
            $depart = $model ->wilController($card ['depart']);
            $arrive = $model ->wilController($card ['arrive']);
            ?>
            <tr>
                <th scope="row">
                    <h6><?=$card ['titre']?></h6>
                </th>
                <td>
                    <h6><?= $card['depart'] ?></h6>
                </td>
                <td>
                    <h6><?= $card['arrive'] ?></h6>
                </td>
                <td>
                    <h6><?=$card ['type_transport']?></h6>
                </td>
                <td>
                    <h6><?=$card ['moyen_transport']?></h6>
                </td>
                <td>
                    <h6><?=$card ['poid']?></h6>
                </td>
                <td>
                    <h6><?=$card ['volume']?></h6>
                </td>
                <td>
                    <h6><?php $user = $model ->userController($card ['type_user']); ?></h6>
                </td>
                <td>
                    <h6><?=$card ['date']?></h6>
                </td>
                <td>
                    <h6><?=$card ['etat']?></h6>
                </td>
                <td>
                    <h6><?= $archive = $model ->archiveController($card ['archive']);?></h6>
                </td>
                <td><?php
                    if($card ['valide'] != 1){?>
                        <h6><a class="btn btn-sm" href="valideAnnonce.php?id=<?= $card['id_annonce'] ?>" role="button">Valider</a></h6>
                    <?php } ?>
                </td>
                <td><?php
                    if($card ['valide'] == 1){?>
                        <h6><a class="btn btn-sm" href="annulerAnnonce.php?id=<?= $card['id_annonce'] ?>" role="button">Annuler</a></h6>
                    <?php } ?>
                </td>
            </tr><?php 
        } ?>
        </tbody>
        </table><?php 
    }

    function getAnnoncesVue(){
        $model = new ControllerAnnonce();
        $cards = $model ->getAnnonceController();
        $this->table($cards);
    }

    function choixVue(){
        if(isset($_POST["choix"])){
            $selction=$_POST["selection"];
            foreach($selction as $sel){
                if($sel==0){?>
                    <form method="POST" class="form-inline mx-auto">
                    <div class="form-group row">
                        <div class="col-sm-5"> 
                            <select name="filtrer[ ]" id="filtrer">
                                <option value="">Filter selon?</option>
                                <option value="0">Etat de l'annomce</option>
                                <option value="1">Type de l'utilisateur</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-10">
                            <button type="submit" name="choixFiltrer" class="btn btn-sm btn-primary" >Filtrer</button>
                        </div>
                    </div>
                </form><?php
                }else{?>
                    <form method="POST" class="form-inline mx-auto">
                    <div class="form-group row">
                        <div class="col-sm-5"> 
                            <select name="trier[ ]" id="trier">
                                <option value="">Trier selon?</option>
                                <option value="0">Titre</option>
                                <option value="1">Date</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-10">
                            <button type="submit" name="choixTrier" class="btn btn-sm btn-primary" >Trier</button>
                        </div>
                    </div>
                </form><?php
                }          
            }
        }
    }



    function TrierVue(){
        $model = new ControllerAnnonce();
        if(isset($_POST["choixTrier"])){
            $selction=$_POST["trier"];
            foreach($selction as $sel){
                if($sel==0){
                    $cards = $model ->TrierTitreController();?>
                    <h4>Resultat du tri </h4><?php
                    $this->table($cards);
                    
                }else{
                    $cards = $model ->TrierDateController();?>
                    <h4>Resultat du tri </h4><?php
                    $this->table($cards);
                }          
            }
        }
    }

    function Filtrage(){
        $model = new ControllerAnnonce();
        if(isset($_POST["choixFiltrer"])){
            $selction=$_POST["filtrer"];
            foreach($selction as $sel){
                if($sel==0){?>
                    <form method="POST" class="form-inline mx-auto">
                        <div class="form-group row ">
                            <div class="col-sm-5 ">
                                <select name="etat[ ]" id="etat" required>
                                    <option value="">Choisir l'etat de l'annonce</option>
                                    <option value="en cours">En cours</option>
                                    <option value="terminee">Terminée</option>
                                </select>
                            </div>   
                        </div> 
                        <div class="form-group row">
                            <div class="offset-sm-3 col-sm-10">
                                <button type="submit" name="FiltrerEtat" class="btn btn-sm btn-primary" >OK</button>
                            </div>
                        </div>
                    </form><?php
                    
                }else{?>
                    <form method="POST" class="form-inline mx-auto">
                        <div class="form-group row ">
                            <div class="col-sm-5 ">
                            <select name="user[ ]" id="user" required>
                                    <option value="">Choisir le type d'utilisateur</option>
                                    <option value="1">Client</option>
                                    <option value="0">Transporteur</option>
                                </select>
                            </div>   
                        </div> 
                        <div class="form-group row">
                            <div class="offset-sm-3 col-sm-10">
                                <button type="submit" name="FiltrerUser" class="btn btn-sm btn-primary" >OK</button>
                            </div>
                        </div>
                    </form><?php
                }          
            }
        }
    }

    function FiltrerVue(){
        $model = new ControllerAnnonce();
        if(isset($_POST["FiltrerEtat"])){
            $selction=$_POST["etat"];
            foreach($selction as $sel){
            $cards = $model ->FiltrerEtatController($sel);?>
            <h4>Resultat du filtrage </h4><?php
            $this->table($cards);}
        }
        if(isset($_POST["FiltrerUser"])){
            $selction=$_POST["user"];
            foreach($selction as $sel){
                if($sel == 1){
                    $cards = $model ->FiltrerClientController($selction);?>
                    <h4>Resultat du filtrage </h4><?php
                    $this->table($cards);
                }else{
                    $cards = $model ->FiltrerTransporteurController($selction);?>
                    <h4>Resultat du filtrage </h4><?php
                    $this->table($cards);
                }
            }
        }
    }
}
?>
<?php
require_once('../controllers/controllerTransporteur.php');
class vueTransporteur{
    function getTansporteursVue(){
        $model = new ControllerTransporteur();
        $cards = $model ->getTransporteurController();
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Num Tel</th>
                    <th scope="col">Adresse</th>
                </tr>
            </thead>
            <tbody><?php
            foreach($cards as $card){?>
                <tr>
                    <th scope="row">
                        <h6><?=$card ['nom']?></h6>
                    </th>
                    <td>
                        <h6><?=$card ['prenom']?></h6>
                    </td>
                    <td>
                        <h6><?=$card ['email']?></h6>
                    </td>
                    <td>
                        <h6><?=$card ['tel']?></h6>
                    </td>
                    <td>
                        <h6><?=$card ['adresse']?></h6>
                    </td>
                    <td><?php
                        if($card ['banir'] != 1){?>
                            <h6><a class="btn btn-sm" href="modifTransporteur.php?id=<?= $card['id_transporteur'] ?>" id="" role="button">Banir</a></h6>
                        <?php }
                        if($card ['banir'] == 1){?>
                            <h6><a class="btn btn-sm" href="autoriserTransporteur.php?id=<?= $card['id_transporteur'] ?>" id="" role="button">Autoriser</a></h6>
                        <?php } ?>
                    </td>
                    <td><?php
                    if($card ['status'] == 'en attente'){?>
                        <h6><a class="btn btn-sm" href="valideTransporteur.php?id=<?= $card['id_transporteur'] ?>" id="" role="button">Valider</a></h6>
                    <?php } ?></td>
                    <td><?php
                    if($card ['status'] == 'en attente'){?>
                        <h6><a class="btn btn-sm" href="refusTransporteur.php?id=<?= $card['id_transporteur'] ?>" id="" role="button">Refuser</a></h6>
                    <?php } ?></td>
                    <td><?php
                    if($card ['certifie'] == 'oui' && $card ['status'] != 'certifie'&& $card ['status'] != 'refus'){?>
                        <h6><a class="btn btn-sm" href="certifierTransporteur.php?id=<?= $card['id_transporteur'] ?>" id="" role="button">Cerifie</a></h6>
                    <?php } ?></td>
                    
                </tr><?php 
            } ?>
            </tbody>
        </table><?php 
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
                                <option value="0">Nom</option>
                                <option value="1">Prenom</option>
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
                                <option value="0">Nom</option>
                                <option value="1">Prenom</option>
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

    function table($cards){?>
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Email</th>
                <th scope="col">Num Tel</th>
                <th scope="col">Adresse</th>
            </tr>
        </thead>
        <tbody><?php
        foreach($cards as $card){?>
            <tr>
                <th scope="row">
                    <h6><?=$card ['nom']?></h6>
                </th>
                <td>
                    <h6><?=$card ['prenom']?></h6>
                </td>
                <td>
                    <h6><?=$card ['email']?></h6>
                </td>
                <td>
                    <h6><?=$card ['tel']?></h6>
                </td>
                <td>
                    <h6><?=$card ['adresse']?></h6>
                </td>
                <td><?php
                    if($card ['banir'] != 1){?>
                        <h6><a class="btn btn-sm" href="modifTransporteur.php?id=<?= $card['id_transporteur'] ?>" id="" role="button">Banir</a></h6>
                    <?php } ?>
                </td>
            </tr><?php 
        } ?>
        </tbody>
        </table><?php 
    }

    function TrierVue(){
        $model = new ControllerTransporteur();
        if(isset($_POST["choixTrier"])){
            $selction=$_POST["trier"];
            foreach($selction as $sel){
                if($sel==0){
                    $cards = $model ->TrierNomController();?>
                    <h4>Resultat du tri </h4><?php
                    $this->table($cards);
                    
                }else{
                    $cards = $model ->TrierPrenomController();?>
                    <h4>Resultat du tri </h4><?php
                    $this->table($cards);
                }          
            }
        }
    }

    function Filtrage(){
        $model = new ControllerTransporteur();
        if(isset($_POST["choixFiltrer"])){
            $selction=$_POST["filtrer"];
            foreach($selction as $sel){
                if($sel==0){?>
                    <form method="POST" class="form-inline mx-auto">
                        <div class="form-group row ">
                            <div class="col-sm-5 ">
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required  >
                            </div>   
                        </div> 
                        <div class="form-group row">
                            <div class="offset-sm-3 col-sm-10">
                                <button type="submit" name="FiltrerNom" class="btn btn-sm btn-primary" >OK</button>
                            </div>
                        </div>
                    </form><?php
                    
                }else{?>
                    <form method="POST" class="form-inline mx-auto">
                        <div class="form-group row ">
                            <div class="col-sm-5 ">
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" required  >
                            </div>   
                        </div> 
                        <div class="form-group row">
                            <div class="offset-sm-3 col-sm-10">
                                <button type="submit" name="FiltrerPrenom" class="btn btn-sm btn-primary" >OK</button>
                            </div>
                        </div>
                    </form><?php
                }          
            }
        }
    }

    function FiltrerVue(){
        $model = new ControllerTransporteur();
        if(isset($_POST["FiltrerNom"])){
            $selction=$_POST["nom"];
            $cards = $model ->FiltrerNomController($selction);?>
            <h4>Resultat du filtrage </h4><?php
            $this->table($cards);
        }
        if(isset($_POST["FiltrerPrenom"])){
            $selction=$_POST["prenom"];
            $cards = $model ->FiltrerPrenomController($selction);?>
            <h4>Resultat du filtrage </h4><?php
            $this->table($cards);
        }
    }
}
?>
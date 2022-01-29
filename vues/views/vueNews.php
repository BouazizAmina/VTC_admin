<?php
require_once('../controllers/controllerNews.php');
class vueNews{
    function setAjoutNewsVue(){
        $model = new controllerNews();
        $err = $model ->setAjoutNewsController();
        return $err;
    }

    function modifNewsVue($id){
        $model = new controllerNews();
        $msg = $model ->modifNewsController($id);
        return $msg;
    }

    function getCardNewsVue(){
        $model = new ControllerNews();
        $cards = $model ->getCardNewsController();
        ?>
        <table class="table table-striped table-bordered table-sm" id="dtBasicExample">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Date d'ajout</th>
                </tr>
            </thead>
            <tbody><?php
            foreach($cards as $card){?>
                <tr>
                    <th scope="row">
                        <h6><?=$card ['id_news']?></h6>
                    </th>
                    <td>
                        <h6><?=$card ['titre']?></h6>
                    </td>
                    <td>
                        <h6><?=$card ['date_ajout']?></h6>
                    </td>
                    <td>
                        <h6><a class="btn btn-sm" href="views/supprimerNews.php?id=<?= $card['id_news'] ?>" role="button">supprimer</a></h6>
                    </td>
                    <td>
                        <h6><a class="btn btn-sm" href="ModifierNews.php?id=<?= $card['id_news'] ?>" id="" role="button">modifier</a></h6>
                    </td>
                </tr><?php 
            } ?>
            </tbody>
        </table><?php 
    }
}
?>
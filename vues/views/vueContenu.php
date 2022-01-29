<?php
require_once('../controllers/controllerContenu.php');
class vueContenu{
    function modiPreVue(){
        $model = new controllerContenu();
        $err = $model ->modifPresController();
        return $err;
    }

    function getInfoVue(){
        $model = new controllerContenu();
        $err = $model ->getInfoController();
        return $err;
    }

    function modiContactVue(){
        $model = new controllerContenu();
        $err = $model ->modifContactController();
        return $err;
    }

    function contactInfoVue(){
        $model = new controllerContenu();
        $err = $model ->contactInfoController();
        return $err;
    }

    function critereVue(){
        $model = new controllerContenu();
        $err = $model ->critereController();
        // var_dump ($err);
        foreach($err as $errs){?>
            <option value="<?php echo $errs['id']; ?>"><?= $errs['nom']; ?></option> <?php
        }
    }

    function choixVue(){
        $model = new controllerContenu();
        if(isset($_POST["choix"])){
            $selction=$_POST["selection"];
            foreach($selction as $sel){
                // echo $sel;
                $model ->choixController($sel);         
            }
        }
    }
}
?>
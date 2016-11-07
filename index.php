<?php
require './Controleur/actions.php';

try {
    if ((isset($_GET['action'])) && ($_GET['action']=='afficherBillet')) {
        if (isset($_GET['id'])) {
            // intval() renvoie la valeur numérique du paramètre ou 0 en cas d'échec
            $id = intval($_GET['id']);  
            if ($id != 0) {
                afficherBillets($id);
            }
            else
                throw new Exception("Identifiant de billet incorrect");
        }
        else
            throw new Exception("Aucun identifiant de billet");
        }
      else {
          listerBillets();
      }
}
catch (Exception $e) {
    afficherErreur($e->getMessage());
}

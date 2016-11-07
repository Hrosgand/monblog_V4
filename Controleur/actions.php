<?php
require './Modele/modele.php';

function listerBillets()
{
    $billets = getBillets();
    $lienBillet = "index.php?action=afficherBillet&id=";
    // Affichage
    require 'vue/listeBillets.php';
 }
   
 function afficherBillets($id)
{
    $billet = getBillet($id);
    $commentaires = getCommentaires($id);
    require 'vue/detailsBillet.php';
 }
 
function afficherErreur($msgErreur) 
{
    require 'vue/erreur.php';
}

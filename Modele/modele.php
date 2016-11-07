<?php
//effectue la connexion à la bdd
//instancie et renvoie l'objet PDO associé
function getBdd()
{
     // Connexion à la base "monblog" locale, utilisation du compte root sans mot de passe
    $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

function getBillets()
{
    $bdd = getBdd();
    $requeteBillets = "select * from T_BILLET order by BIL_ID desc";
    $stmtBillets = $bdd->query($requeteBillets);
    $billets = $stmtBillets->fetchAll();
    return $billets;
}

function getBillet($idBillet)
{
    $bdd = getBdd();
    $requeteBillet = "select * from T_BILLET where BIL_ID= $idBillet";
    $stmtBillet = $bdd->query($requeteBillet);
    $billet = $stmtBillet->fetch();  // Accès au premier élément résultat
    return $billet;
}

function getCommentaires($idBillet)
{
    $bdd = getBdd();
    $requeteCommentaires = "select * from T_COMMENTAIRE where BIL_ID= $idBillet";
    $stmtCommentaires = $bdd->query($requeteCommentaires);
    $commentaires = $stmtCommentaires->fetchAll();
    return $commentaires;
}

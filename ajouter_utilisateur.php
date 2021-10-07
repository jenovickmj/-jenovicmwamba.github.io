<?php

require_once("../../model/config.php");
require_once("../../model/Connexion.class.php");


if(isset($_POST['nom'])and isset($_POST['pwd']) and isset($_POST['email']) and isset($_POST['adresse'])and isset($_POST['fonction']))
{


/* la déclaration des variables */

$a=$_POST['nom'];
$b=$_POST['pwd'];
$c=$_POST['email'];
$d=$_POST['adresse'];
$e=$_POST['fonction'];


/* preparation de la requette */
$req=Connexion::getConnexion()->prepare("INSERT INTO utilisateur (id_utilisateur,nom,pwd,email,adresse,fonction) values (?,?,?,?,?,?)");

/* execution de la requette */
    $req->execute(array(0,$a,$b,$c,$d,$e));
     header('location: ../../views/accueil.php');

}

?>
<?php

require_once("../../model/config.php");
require_once("../../model/Connexion.class.php");


if(isset($_POST['contenu']) and isset($_POST['date_cmd']))
{


/* la déclaration des variables */

$a=$_POST['contenu'];
$b=$_POST['date_cmd'];



/* preparation de la requette */
$req=Connexion::getConnexion()->prepare("INSERT INTO cmd (num_cmd,contenu,date_cmd) values (?,?,?)");

/* execution de la requette */
    $req->execute(array(0,$a,$b));
     header('location: ../../views/accueil.php');

}

?>
<?php

require_once("../../model/config.php");
require_once("../../model/Connexion.class.php");


if(isset($_FILES['photo'])and isset($_POST['design']) and isset($_POST['qte']) and isset($_POST['pu']))
{


/* la déclaration des variables */

    $a=$_FILES['photo']['name'];
    $file_t=$_FILES['photo']['tmp_name'];
    move_uploaded_file($file_t,"../../views/image/img_boisson/$a");

$b=$_POST['design'];
$c=$_POST['qte'];
$d=$_POST['pu'];


/* preparation de la requette */
$req=Connexion::getConnexion()->prepare("INSERT INTO boisson (ref_boisson,photo,design,qte,pu) values (?,?,?,?,?)");

/* execution de la requette */
    $req->execute(array(0,$a,$b,$c,$d));
     header('location: ../../views/accueil.php');

}

?>
<?php
/* programme : <login.pho
Description : programme de login pour la section accès réservé
de l'animalemrie. il  propose 2 options
1-siedentifier grace au coupkle login/pwd
2-créer un nouveau compte

Identificateurs et pwd sont conservés dans une db */
session_start();
session_register('auth');
session_register('nomLogin');

include("./chiens.inc");
$nomChamp = array("nomMembre"=>"Nom de membre", "mpasse"=>"Mot de passe", "prenom"=>"Prénom"=>"Prénom","Nom"=>"Nom", "rue"=>"Rue", "ville"=>"Ville","codepostal"=>"code postal", "phone"=>"Téléphone", "email"=>"adresse mail");

function AfficherErreur($texteMsg)
{global $do,$nomMembre,$newPass,$prénom,$nom,$rue,$ville,$codePostal,$département,$phone,$email;
unset($do);
$message_new = $texteMsg;
include("./login_form.inc");
exit();
}

// -------------------------------------------------------------------------------------------------
switch (@$do)
{ case "login" : 
    $connection = mysqli_connect($host,$user,$password)
    or die ("connexion impossible au serveur ! ");

    $db = mysqli_select_db($database,$connection)
    or die("La base de données ne peut pas être sélmectionnée ! ");

    $sql = 


    $result = 


    $num = 


    $result2 = 


    $num2 = 


}
    break;

case "new" : 

?>
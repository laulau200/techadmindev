<?php
/* programme : <login.pho
Description : programme de login pour la section accès réservé
de l'animalemrie. il  propose 2 options
1-siedentifier grace au coupkle login/pwd
2-créer un nouveau compte

Identificateurs et pwd sont conservés dans une db */
session_start();
//session_register('auth');
//session_register('nomLogin');

include("./chiens.inc");
$nomChamp = array("nomMembre"=>"Nom de membre", "mpasse"=>"Mot de passe", "prenom"=>"Prénom","Nom"=>"Nom", "rue"=>"Rue", "ville"=>"Ville","codepostal"=>"code postal", "phone"=>"Téléphone", "email"=>"adresse mail");

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

    $sql = "SELECT nomLogin FROM Membre WHERE nomLogin='$nomUtilisateur";

    $result = mysqli_query($sql) or die("Impossible d'exécuter la requête ! ");

    $num = mysqli_num_rows($result);
    if ($num == 1) // le nom de login a été trouvé
    {$sql = "SELECT nomLogin FROM Membre WHERE nomLogin = '$nomUtilisateur'
    AND mPasse=password('$motDePasse')";
    


    $result2 = mysqli_query($sql) or die("Impossible d'exécuter la requête ! ");


    $num2 = mysqli_num_rows($result2);
    if ($num2 > 0) //MotDePasse correct
    {
        $auth = "yes";
        $aujourdhui = date("Y-m-d h:i:s");
        $sql = "INSERT INTO Login(nomLogin, dateLogin)
        VALUES ('$nomUtilisateur','$aujourdhui')";
        mysqli_query($sql)
            or die("Impossible d'exécuter la requête ! ");
            $nomLogin = $nomUtilisateur;
            header(Location: "PageMembres.php");
    }
    else    //MotDePasse incorrect
    { $message = "Le nom de login '$nomUtilisateur' existe déjà. Mais votre mot de passe est incorrect. 
        Réessayez une fois encore ! <br>";
    unset($do);
    include("./login_form.inc");
    }
    }
    elseif($num == 0) //nom de login absent



    break;

case "new" : 

}

?>
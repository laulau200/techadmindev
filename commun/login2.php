<?php
function stripgpc($value) {
if(get_magic_quotes_gpc()) $value = stripslashes($value);
return $value;
}

$mdp = isset($_POST['mdp']) ? md5(stripgpc($_POST['mdp'])) : '';
$login = isset($_POST['login']) ? stripgpc($_POST['login']) : '';

if(!empty($mdp) && !empty($login)) 
{
$server="********";
$user="root";
$pass="********";
$db="******";
mysql_connect($server,$user,$pass) or die('erreur de connexion');
mysql_select_db($db) or die ('impossible de se connecter a la base'); 

$selection = sprintf("SELECT COUNT(*) as compte FROM user WHERE mdp_user ='%s' AND login_user ='%s'",
mysql_real_escape_string($mdp),
mysql_real_escape_string($login)); 

$query = mysql_query($selection) or die(mysql_error());
$totalReponse = mysql_fetch_assoc($query);

if ($totalReponse['compte'] == 1 ) 
    {
    $_SESSION['login'] = $login;
        header("Location: acceuil.php"); 
    exit(); 
    }
    else 
    {
    echo '<div id="message">membre non identifié<br>';
    echo 'login ou mot de passe incorrecte ou manquant 2</div>';
    } 
    }
else
  {
 $message = 'login ou mot de passe manquant';
    }   		
?>
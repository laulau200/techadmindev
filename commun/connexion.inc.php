<?php
$db_name = 'adherents';
$host = 'localhost';
$user = 'lau_admin';
$pass = 'B@bettevit234';

if (!$id_link = mysqli_connect($host,$user,$pass)){
    echo 'connexion impossible à Mysql ! ';
    exit;
}

if (!mysqli_select_db($db_name,$id_link)) {
    echo 'Sélection de la base de données impossible ! ';
    exit;
}
?>
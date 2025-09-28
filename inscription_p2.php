<?php
include "./commun/connexion.inc.php";
$prenom=$_POST['prenom'];
$code_postal=$_POST['code_postal'];
$ville=$_POST['ville'];
$email=$_POST['email'];
$sql="INSERT INTO membres (prenom, code_postal, ville, email) VALUES ('$prenom', '$code_postal', '$ville', '$email')";
mysqli_query($sql, $id_link);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    Veuillez maintenant choisir le nom d'usage que vous porterez dans le club et le mot de passe pour y accéder. 
    Vous pourrez ainsi rencontrer d'autres membres et modifier votre profil. Voire le supprimer. 

<form action="traitement_id.php" method="post" name="page_2">
    <table cellspacing="2" cellpadding="2" border="0">
        <tr>
            <td>Votre nom d'usage : </td>
            <td><input type="text" name="nom_usage"></td>
        </tr>

        <tr>
            <td>Votre mot de passe : </td>
            <td><input type="password" name="mot_passe"></td>
        </tr>

        <tr>
            <td>Retapez votre mot de passe : </td>
            <td><input type="password" name="mot_passebis"></td>
        </tr>
    </table>
</form>    
</body>
</html>
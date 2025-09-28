<?php
// Fichier : login_form.inc
/* Description : Affiche la page de login. Celle-ci présente deux formulaires : 
le premier pourchoisir un nom existant et son mot de passe. Le second pour 
renseigner les informations permettant de s'enregistrer comme nouveau emembre */
include("functions.inc");
?>

<html>
    <head>
        <title>Page d'accueil des membres et futurs membres</title>
    </head>
    <body topmargin="0" leftmargin="0" marginheight="0" marginwidth="0">
        <table border="0" cellpadding="5" cellspacing="0">
            <tr><td colspan="3" bgcolor="grey" align="center">
                <font color="white" size="+10"><b>Membres ou futurs membres</b></font>
                <p>
                    <!-- pour le login des nouveaux membres -->
<form action="login.php?do=login" method="post">
    <table border="0">
        <?php
        if(isset($message))
            echo"<tr><td colspan='2'>$message</td></tr>";
        ?>
        <tr><td align="right"><b>Nom de logon : </b></td>
        <td><input type="text" name="nomUtilisateur" size="20" value="<?php echo @$nomUtilisateur ?>"</td>

        </tr>
        "
    </table>
</form>         
</td>
<td width="1" bgcolor="gray"></td>
<td width = "67%">
    <p><font size="+1"><b>Pas encore membre ? </b></font>
    Des offres spéciales, une lettre d'informations, des annonces
    sur les nouveaux animaux et plus encore !
    Renseignez le formulaire ci après ²et devenze membre de notre 
    association, c'est facile et gratuit ! </p>

    <!-- formulaire à renseigner par les nouveaux membres -->
     <form action="login.php?do=new" method="post">
        <p>
            <table border="0" width="100%">
                <?php
                if (isse($message_new))
                    echo"<tr><td colspan='2'><b>$message_new</b></td></tr>";
                ?>

        <tr><td align="right"><b>Nom de membre : </b></td>
        <td><input type="text" name="nomMembre" value="<?php echo @$nombre ?>"
    size="20" maxlength="20">
</td>
</tr>

<tr><td align="right"><b>Mot de passe : </b></td>
        <td><input type="password" name="newpass" value="<?php echo @$newpass ?>"
    size="10" maxlength="8">
</td>
</tr>

<tr><td align="right"><b>Prénom : </b></td>
        <td><input type="text" name="prénom" value="<?php echo @$prénom ?>"
    size="40" maxlength="40">
</td>
</tr>

<tr><td align="right"><b>Nom : </b></td>
        <td><input type="text" name="nom" value="<?php echo @$nom ?>"
    size="40" maxlength="40">
</td>
</tr>

<tr><td align="right"><b>Rue : </b></td>
        <td><input type="text" name="rue" value="<?php echo @$rue ?>"
    size="55" maxlength="50">
</td>

<tr><td align="right"><b>Ville : </b></td>
        <td><input type="text" name="ville" value="<?php echo @$ville ?>"
    size="40" maxlength="40">
</td>
</tr>

<tr><td align="right"><b>Code postal : </b></td>
        <td><input type="text" name="codePostal" value="<?php echo @$codePostal ?>"
    size="5" maxlength="5">
</td>
</tr>

<tr><td align="right"><b>Téléphone : </b></td>
        <td><input type="text" name="phone" value="<?php echo @$phone ?>"
    size="10" maxlength="10">
</td>
</tr>

<tr><td align="right"><b>e-mail : </b></td>
        <td><input type="mail" name="email" value="<?php echo @$email ?>"
    size="20" maxlength="20">

<tr><td>&nbsp;</td>
<td align="center">
    <input type="submit" value="Enregistrez-vous">

</td>
</tr>
</table>
     </form>
</td>
</tr>
<tr><td colspan="3" bgcolor="gray">&nbsp;</td></tr>
        </table>
        <br>
<div align="center"><font-size="-1">
    Nous aprécions vos commentaires et suggestions, vou pouvez les adresser à 
    <a href="mailto:laurent.demazy@gmail.com">
        webmestre@ldemazy.com</a>
</font-size></div>
    </body>
<html>
<?php
/* programme : nouveauMembre.php
Description : Affiche une page de bienvenue à lattention du nouveau membre en lappelant par ses prenom/nom. 
il a ensuite le choix entre visiter les pages acces reservé ou la page classique */
session_start();
if(@$auth !="yes")
{
    header("Location: login.php");
    exit;
}
include("./chiens.inc");

$connection = 

$db =

$sql = 

$result = 

$ligne = 

echo "<html>
    <head>
    <title>Bienvenue au nouveau membre</title>
    </head>
    <body>
    <h2 align='center' style='margin-top: .7in'>
    bienvenue à $nom $prenom</h2> \n";
?>

<body>
    votre inscription en tant que membre des amis de l'animalerie
    vous permet de visiter les pages à accès réservé de notre site web : <br>
    Vous y trouverez des offres spéciale, une importante base de données sur la vie et les moeurs des animaux
    Des conseils donnés par des spécialistes sur les soins à donner aux animaux. 
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, explicabo? Voluptatibus omnis sapiente, a voluptate ipsam necessitatibus, id cupiditate aut natus molestiae sint laudantium commodi, est quibusdam nam corporis quos?
    <br>
    <div align="center">
        <p style="margin-top: .5in">
            <b>nous sommes heureux de vous compter parmi nous</b>
            <form action="member_page.php" method="post">
                <input type="submit" value="Revenir à la page daccueil">
            </form>
        </p>
    </div> 
</body>
</html>
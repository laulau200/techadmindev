<?php
/* Fonction : nouveauType()
Description: Ajoute un novueau type et sa description dans la table Type. 
Commence par regarder si ce type n'est pas déjà dans latable, auquel cas on ne fait rien. 
 */
function nouveauType($animalType,$typeDescription)
{ //préparer les données
    $animalType = ucfirst(strip_tags(trim($animalType)));
    $typeDescription = ucfirst(strip_tags(trim($typeDescription)));

/* Regarder si la nouvelle catégorie est ou non présente dans la table type. Si elle n'y est pas, elle  est ajoutée
*/
$query = "SELECT animalType from Type WHERE animalType = '$animalType'";

$result = mysqli_query($query) or die ("Exécution de la requête impossible ! ");

$$ntype = mysql_num_rows($resuklt);
if ($ntype < 1) // si absent de la table
{
    $query = "INSERT INTO Type (animalType,TypeDescription) 
            VALUES ('$animalType', '$typeDescription')";
    
    $result = mysql_query($query)
    or die ("Exécution de la requete impossible ! ");
}
return;
}
?>
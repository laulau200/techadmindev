<?  /* programme   : Catalogue.php
     * Description : Affiche une liste de catégories d'animaux
     *               à partir de la table Type.
     */
 ?>
 <html>
 <head>
 <title> Types d'animaux </title>
 </head>
 <body>
 <?php
  include("misc.inc");
  
  $connection = mysql_connect($host, $user, $password)
              or die ("Connexion au serveur impossible ! ");
  
  $db = mysql_select_db($database, $connection)
              or die("Sélection de la base de données impossible ! ");
  
  
  //Sélectionnez toues les catégories présentes dans la table type
  $query = "SELECT * FROM Type ORDER BY animalType";
  $result = mysql_query($query)
          or die ("Exécution de la sélection impossible ! ")
  
  
  //Affichage du formulaire
  echo "<div style='margin-left: .lin'>
  <h1 align='center'>Catalogue des animaux</h1>
  <h2 align='center'>Vos amis animaux vous attendent</h2>
  <p align='center'>choisissez celui qui vous plaît et
     précipitez-vous dans votre alimalerie
  
  <p><h3>Quel type d'animal cherchez-vous ? </h3> \n";
  
  
  
  // Créer le formulaire de sélection
  echo "<form action='montranimo.php" method='post'>\n;
  echo "<table cellpadding='5' border='1'>";
  $compteur=1;
  while ($ligne= mysql_fetch_array($result))
	(  extract($ligne);
	echo "<tr><td valign='top' wigth='153'>\n";
	echo "<input type='radio' name='interet'
				value='$animalType'\n";
	if ($compteur==1)
	( echo "checked";
	)
	echo "><font size='+1'><b>$animalType</b></font>
			</td>
			<td>$typeDescription</td>
			</tr>";
	$compteur++;
	)
	
	echo "</table>";	
	echo "<p><input type='submit' value='Faites votre choix '>
		  </form>\n;  
  
   ?>
   </div>
   </body>
   </html>

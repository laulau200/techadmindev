<?  /* programme   : Catalogue.php
     * Description : Affiche une liste de cat�gories d'animaux
     *               � partir de la table Type.
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
              or die("S�lection de la base de donn�es impossible ! ");
  
  
  //S�lectionnez toues les cat�gories pr�sentes dans la table type
  $query = "SELECT * FROM Type ORDER BY animalType";
  $result = mysql_query($query)
          or die ("Ex�cution de la s�lection impossible ! ")
  
  
  //Affichage du formulaire
  echo "<div style='margin-left: .lin'>
  <h1 align='center'>Catalogue des animaux</h1>
  <h2 align='center'>Vos amis animaux vous attendent</h2>
  <p align='center'>choisissez celui qui vous pla�t et
     pr�cipitez-vous dans votre alimalerie
  
  <p><h3>Quel type d'animal cherchez-vous ? </h3> \n";
  
  
  
  // Cr�er le formulaire de s�lection
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

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

// validation des données
if(empty($name) || empty($message) {
	echo "Merci de renseigner les informations ! ";

} else {

// envoi du mail
$to = "laurent.demazy@gmail.com";
$headers = "from: $name <$email>";
mail($to, $subject, $message, $headers);
echo "votre message a été envoyé avec succès. ";
	}

}
?>
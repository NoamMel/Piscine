<?php
// Nom de la base de données
$database="eceamazon";


$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle,$database);

$mail=isset($_POST["mail"])?$_POST["mail"]:"";
$mdp=isset($_POST["mdp"])?$_POST["mdp"]:"";

if ($db_found){
	$sql="SELECT * FROM acheteurs";
	if ($mail!=""){
		$sql = " SELECT * FROM acheteurs WHERE Mail LIKE '%$mail%' ";
		if ($mdp != ""){
			$sql = " SELECT * FROM acheteurs WHERE Mail LIKE '%$mail%' AND MotdePasse LIKE '%$mdp%' ";
		}
		else{

			$connect="UPDATE acheteurs SET Connect='0'";
			$connect2="UPDATE connexion SET Connect='0'";
			// à vérifier, comme il y a une erreur d'authentification alors le booléen user_connexion
			//la valeur 0
			//$connect=0;
			?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Mot de passe vide !")
			document.location.href="register-acheteur-paiement.html";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
		}
	}
	else{

		$connect="UPDATE acheteurs SET Connect='0'";
		$connect2="UPDATE connexion SET Connect='0'";
		// à vérifier, comme il y a une erreur d'authentification alors le booléen user_connexion
		//la valeur 0
		//$user_connexion=0;
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Mail Vide !")
			document.location.href="register-acheteur-paiement.html";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
	}
	$result=mysqli_query($db_handle,$sql);
	if (mysqli_num_rows($result) == 0){

		$connect="UPDATE acheteurs SET Connect='0'";
		$connect2="UPDATE connexion SET Connect='0'";
		// à vérifier, comme il y a une erreur d'authentification alors le booléen user_connexion
		//la valeur 0
		//$user_connexion=0;
?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Erreur d'authentification !!")
			document.location.href="register-acheteur-paiement.html";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
	}
	else {

		$connect="UPDATE acheteurs SET Connect='1'";
		$connect2="UPDATE connexion SET Connect='1'";
		// à vérifier, comme il y n'y a pas d'erreur d'authentification alors le booléen connect
		//la valeur 1
		//$user_connexion=1;
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Vous êtes connecté !")
			document.location.href="paiement.html";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
	}
}
else {
	echo "DATABASE NOT FOUND";
}
?>

<?php
// Nom de la base de données
$database="eceamazon";


$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle,$database);

$mail=isset($_POST["mail"])?$_POST["mail"]:"";
$mdp=isset($_POST["mdp"])?$_POST["mdp"]:"";

if ($db_found){
	$sql="SELECT * FROM administrateurs";
	if ($mail!=""){
		$sql = " SELECT * FROM administrateurs WHERE Mail LIKE '%$mail%' ";
		if ($mdp != ""){
			$sql = " SELECT * FROM administrateurs WHERE Mail LIKE '%$mail%' AND MotdePasse LIKE '%$mdp%' ";
		}
		else{
			$connect="UPDATE administrateurs SET Connect='0'";
			?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Mot de Passe vide !")
			document.location.href="register-admin.html";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
		}
	}
	else{
		$connect="UPDATE administrateurs SET Connect='0'";
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Mail vide !")
			document.location.href="register-admin.html";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
	}
	$result=mysqli_query($db_handle,$sql);
	if (mysqli_num_rows($result) == 0){
	$connect="UPDATE administrateurs SET Connect='0'";
?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Erreur d'authentification !!")
			document.location.href="register-admin.html";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
	}
	else {
		$connect="UPDATE administrateurs SET Connect='1'";
		?>
<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Vous etes connecté !")
			document.location.href="choix-admin.html";
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

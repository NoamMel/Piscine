<?php
// Nom de la base de données
$database="eceamazon";


$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle,$database);

$mail=isset($_POST["mail"])?$_POST["mail"]:"";
$pseudo=isset($_POST["pseudo"])?$_POST["pseudo"]:"";

if ($db_found){
	$sql="SELECT * FROM vendeurs";
	if ($mail!=""){
		$sql = " SELECT * FROM vendeurs WHERE Mail LIKE '%$mail%' ";
		if ($pseudo != ""){
			$sql = " SELECT * FROM vendeurs WHERE Mail LIKE '%$mail%' AND Pseudo LIKE '%$pseudo%' ";
		}
	}
	$result=mysqli_query($db_handle,$sql);
	if (mysqli_num_rows($result) == 0){
?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Erreur d'authentification !!")
			document.location.href="register-vendeur.html";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
<?php
	}
	else {
		echo "Vous êtes connecté";
		header('Location: home.php');
		echo "Vous êtes connecté";
	}
}
else {
	echo "DATABASE NOT FOUND";
}
?>
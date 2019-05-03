<?php
$database="eceamazon";

$mysqli= new PDO("mysql:host=localhost;dbname=eceamazon","root","");
$requete=$mysqli->query("SELECT * FROM musiques");
$ligne=$requete->fetch();
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle,$database);


if (isset($_POST['misdanspanier'])){
	$quantite=$_POST['quantite'];
	$prix=$_POST['prix'];
	$nom=$_POST["nom"];
	$id=$_POST["id"];

	if ($quantite>0){
		$sql="SELECT Nom,Prix FROM musiques WHERE Nom LIKE '%$nom%' ";
		$sql="INSERT INTO panier VALUES ('$nom','Musique',$prix)";
		$result = mysqli_query($db_handle, $sql);
		$quantite=$_POST['quantite'];
		$quantite=$quantite-1;
		$req=$mysqli->query('UPDATE musiques SET Quantite="'.$quantite.'" WHERE Identification="'.$id.'" ');		
	
		
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Article ajouté au panier")
			document.location.href="page-musiquesFORM.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
		<?php

	}
	else{
		$sql=$mysqli->query('DELETE FROM musiques WHERE Identification="'.$id.'" ');

		?>

		<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("L'article n'est plus disponible.")
			document.location.href="page-musiquesFORM.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
		<?php
	}
}
		?>
		


<?php
$database="eceamazon";

$mysqli= new PDO("mysql:host=localhost;dbname=eceamazon","root","");
$requete=$mysqli->query("SELECT * FROM livres");
$ligne=$requete->fetch();
$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle,$database);

if (isset($_POST['misdanspanier'])){
	$quantite=$ligne['Quantite'];
	$nom=$ligne['Nom'];
	$prix=$ligne['Prix'];
	if ($quantite!=0){
		$sql="SELECT Nom,Prix FROM livres WHERE Nom LIKE '%$nom%' ";
		$sql="INSERT INTO panier VALUES ($prix,'Livre',$prix)";
		$result = mysqli_query($db_handle, $sql);
		$quantite=$quantite-1;
		$sq="UPDATE livres SET Quantite=$quantite WHERE Nom LIKE '%$nom%' ";
		$result = mysqli_query($db_handle, $sql);
		?>
		<!-- <!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Article ajouté au panier")
			document.location.href="home.php";
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html> -->
		<?php

	}
}
		?>
		

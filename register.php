<?php  
// Nom de la base de données
$database="eceamazon";

$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle,$database);


$nom=isset($_POST["nom"])?$_POST["nom"]:"";
$prenom=isset($_POST["prenom"])?$_POST["prenom"]:"";
$mail=isset($_POST["mail"])?$_POST["mail"]:"";
$pseudo=isset($_POST["pseudo"])?$_POST["pseudo"]:"";
$mdp=isset($_POST["mdp"])?$_POST["mdp"]:"";
$adresse1=isset($_POST["adresse1"])?$_POST["adresse1"]:"";
$adresse2=isset($_POST["adresse2"])?$_POST["adresse2"]:"";
$ville=isset($_POST["ville"])?$_POST["ville"]:"";
$pays=isset($_POST["pays"])?$_POST["pays"]:"";
$telephone=isset($_POST["telephone"])?$_POST["telephone"]:"";
$CodePostal=isset($_POST["codepostal"])?$_POST["codepostal"]:"";
$error="";
if($nom==""){$error.="Nom vide <br>";}
if($prenom==""){$error.="Prenom vide <br>";}
if($mail==""){$error.="Mail vide <br>";}
if($pseudo==""){$error.="Pseudo vide <br>";}
if($mdp==""){$error.="Mot de Passe vide <br>";}
if($adresse1==""){$error.="Adresse 1 vide <br>";}
if($ville==""){$error.="Ville vide <br>";}
if($pays==""){$error.="Pays vide <br>";}
if($telephone==""){$error.="Telephone vide <br>";}
if($CodePostal==""){$error.="Code Postal vide <br>";}

if($_POST["sinscrire"]){
if ($db_found) {
	if ($error==""){
		$sql="SELECT * FROM acheteurs";
		if ($mail!=""){
			$sql="SELECT * FROM acheteurs WHERE Mail LIKE '%$mail%' ";
		}
		$result = mysqli_query($db_handle, $sql);
		if (mysqli_num_rows($result) == 0) {
			$sql="INSERT INTO acheteurs VALUES ('$nom','$prenom','$mail','$pseudo','$mdp','$adresse1','$adresse2','$ville','$CodePostal','$pays','$telephone') ";
		$result = mysqli_query($db_handle, $sql);
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Vous etes inscrit !")
			document.location.href="home.php"
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
		<?php
		}
		else {
			?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Ce mail est déja utilisé !")
			document.location.href="register.html"
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
		<?php
		}
		
		
	}
	else {
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>redirection</title>
			<script type="text/javascript">
			alert("Erreur d'inscription : <?php echo "$error" ?> !")
			document.location.href="register.html"
		</script>
		</head>
		<body onLoad="setTimeout('RedirectionJavascript()', 200)">
		</body>
		</html>
		<?php
	}
}
else{
	echo "database not found";
}
}
?>
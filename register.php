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
$adresse=isset($_POST["adresse"])?$_POST["adresse"]:"";
$statut=isset($_POST['statut'])?$_POST['statut']:'';


$error="";
if($nom==""){$error.="Nom vide <br>";}
if($prenom==""){$error.="Prenom vide <br>";}
if($mail==""){$error.="Mail vide <br>";}
if($pseudo==""){$error.="Pseudo vide <br>";}
if($mdp==""){$error.="Mot de Passe vide <br>";}
if($adresse==""){$error.="Adresse vide <br>";}
if ($db_found) {
	if ($statut=='acheteur'){
		$sql="INSERT INTO acheteurs VALUES ('$nom','$prenom','$mail','$pseudo','$mdp','$adresse') ";
		$result = mysqli_query($db_handle, $sql);
		echo "Personne ajouté dans la table acheteurs";
	}
	if ($statut=='vendeur'){
		$sql="INSERT INTO vendeurs VALUES ('$nom','$prenom','$mail','$pseudo','$mdp','$adresse') ";
		$result = mysqli_query($db_handle, $sql);
		echo "Personne ajouté dans la table vendeurs";
	}
	
	
}
else{
	echo "database not found";
}

?>
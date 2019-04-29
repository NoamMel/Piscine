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
if(isset($_POST['statut']))
{
	$statut=ceil($_POST["statut"]);
}

$error="";
if($nom==""){$error.="Nom vide <br>";}
if($prenom==""){$error.="Prenom vide <br>";}
if($mail==""){$error.="Mail vide <br>";}
if($pseudo==""){$error.="Pseudo vide <br>";}
if($mdp==""){$error.="Mot de Passe vide <br>";}
if($adresse==""){$error.="Adresse vide <br>";}
if ($db_found) {
	if($statut=="acheteur")
	{
		$sql="INSERT INTO acheteurs (Nom,Prenom,Mail,Pseudo,Mot de Passe,Adresse) VALUES ($nom,$prenom,$mail,$pseudo,$mdp,$adresse) ";
	}
	else if($statut=="vendeur")
	{
		$sql="INSERT INTO vendeurs (Nom,Prenom,Mail,Pseudo,Mot de Passe,Adresse) VALUES ($nom,$prenom,$mail,$pseudo,$mdp,$adresse) ";
	}
	else 
	{
		echo "Erreur de saisie";
	}
}
else{
	echo "database not found";
}

?>
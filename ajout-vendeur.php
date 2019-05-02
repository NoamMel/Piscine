<?php
// Nom de la base de données
$database="eceamazon";


$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle,$database);

$mail=isset($_POST["mail"])?$_POST["mail"]:"";
$pseudo=isset($_POST["pseudo"])?$_POST["pseudo"]:"";
$nom=isset($_POST["nom"])?$_POST["nom"]:"";

$error="";
if($nom==""){$error.="Nom vide <br>";}
if($mail==""){$error.="Mail vide <br>";}
if($pseudo==""){$error.="Pseudo vide <br>";}

if(isset($_POST["ajouter"])){
	if($db_found){
		if($error==""){
			$sql="SELECT * FROM acheteurs WHERE Mail LIKE '%$mail%' AND Pseudo LIKE '%$pseudo%' AND Nom LIKE '%$nom%' ";
			$sql="INSERT INTO vendeurs $sql";
			$result = mysqli_query($db_handle, $sql);
			echo "L'utilisateur a été ajouté à la liste des vendeurs.";
		}
		else{
			echo "Erreur : $error";
		}
	}
}
if(isset($_POST["supprimer"])){
	if($db_found){
		if($error==""){
			$sql="DELETE FROM vendeurs WHERE Mail LIKE '%$mail%' AND Pseudo LIKE '%$pseudo%' AND Nom LIKE '%$nom%' ";
			$result = mysqli_query($db_handle, $sql);
			echo "L'utilisateur a été retiré de la liste des vendeurs.";
		}
		else{
			echo "Erreur : $error";
		}
	}
}

?>
<?php
// Nom de la base de données
$database="eceamazon";

$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle,$database);

$nom=isset($_POST["nom"])?$_POST["nom"]:"";
$prix=$_POST["prix"];
$description=isset($_POST["description"])?$_POST["description"]:"";
$image1=isset($_POST["image1"])?$_POST["image1"]:"";
$image2=isset($_POST["image2"])?$_POST["image2"]:"";
$categorie=$_POST["categorie"];
$quantite=$_POST['quantite'];
echo "$categorie";

if($_POST["ajouter"]){
	if($db_found){
	if($categorie=='livre'){
		$sql="INSERT INTO livres VALUES (0,'$nom','$image1','$image2','$description',$prix,$quantite)";
		$result = mysqli_query($db_handle, $sql);
		echo "L'article a été ajouté dans la catégorie Livres";
	}
	else if($categorie=='vetement'){
		$sql="INSERT INTO vetements VALUES (0,'$nom','$image1','$image2','$description',$prix,$quantite)";
		$result = mysqli_query($db_handle, $sql);
		echo "L'article a été ajouté dans la catégorie Vetements";
	}
	else if($categorie=='musique'){
		$sql="INSERT INTO musiques VALUES (0,'$nom','$image1','$image2','$description',$prix,$quantite)";
		$result = mysqli_query($db_handle, $sql);
		echo "L'article a été ajouté dans la categorie Musiques";
	}
	else if($categorie=='sport'){
		$sql="INSERT INTO sports et loisirs VALUES (0,'$nom','$image1','$image2','$description',$prix,$quantite)";
		$result = mysqli_query($db_handle, $sql);
		echo "L'article a été ajouté dans la catégorie Sports et Loisirs";
	}
	else {
		echo "Erreur d'insertion";
	}

}
else{
	echo "database not found";
}
}
if(isset($_POST["supprimer"])){
	if($db_found){
		if ($categorie=='livre'){
		$sql="DELETE FROM $categorie WHERE Nom LIKE '%$nom%'";
		$result = mysqli_query($db_handle, $sql);
		echo "L'article a $nom a été supprimé de la catégorie Livres";
		}
		
	}
	else{
		echo "DATABASE NOT fOUND";
	}
}



?>
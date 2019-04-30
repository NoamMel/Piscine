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
	}
	$result=mysqli_query($db_handle,$sql);
	if (mysqli_num_rows($result) == 0){
		echo "Erreur de Mail ou de Mot de Passe";
	}
	else {
		echo "Vous êtes connecté";
	}
}
else {
	echo "DATABASE NOT FOUND";
}
?>
<?php 
$database="eceamazon";

$mysqli= new PDO("mysql:host=localhost;dbname=eceamazon","root","");

$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle,$database);

if(isset($_POST["payer"])){
	if($db_found){
		$sql=$mysqli->query("DELETE FROM panier");
		header('Location:register-acheteur-paiement.html');
	}
	else{
		echo "database not found";
	}
}
<?php
$database="eceamazon";

$db_handle = mysqli_connect('localhost','root','');
$db_found = mysqli_select_db($db_handle,$database);

$NumeroCarte=isset($_POST["NumeroCarte"])?$_POST["NumeroCarte"]:"";
$DateExpiration=isset($_POST["DateExpiration"])?$_POST["DateExpiration"]:"";
$CodeSecurite=isset($_POST["CodeSecurite"])?$_POST["CodeSecurite"]:"";
$NomTitulaire=isset($_POST["NomTitulaire"])?$_POST["NomTitulaire"]:"";
$adresse1=isset($_POST["adresse1"])?$_POST["adresse1"]:"";
$adresse2=isset($_POST["adresse2"])?$_POST["adresse2"]:"";
$ville=isset($_POST["ville"])?$_POST["ville"]:"";
$pays=isset($_POST["pays"])?$_POST["pays"]:"";
$CodePostal=isset($_POST["codepostal"])?$_POST["codepostal"]:"";
$error="";
if($CodePostal==""){$error.="Code Postal vide <br>";}
if($NumeroCarte==""){$error.="Numero de Carte vide <br>";}
if($DateExpiration==""){$error.="Date d'expiration vide <br>";}
if($CodeSecurite==""){$error.="Code de securite vide <br>";}
if($NomTitulaire==""){$error.="Numero de Titulaire vide <br>";}
if($adresse1==""){$error.="Adresse 1 vide <br>";}
if($ville==""){$error.="Ville vide <br>";}
if($pays==""){$error.="Pays vide <br>";}
if($_POST['valider']){
  if($db_found){
    $sql="SELECT * FROM acheteurs";
    if($NumeroCarte!=""){
      $sql="SELECT * FROM acheteurs WHERE NumeroCarte LIKE '%$NumeroCarte%' ";
      if($DateExpiration!=""){}
    }
    }

    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>
   <title>Validation du paiement</title>
   <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="validation.css"/>

  <nav>
    <!--Insertion du logo -->
    <img src="newLogo.png" alt="logo" style="float: left;"/>
    <!--Barres de navigation -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="float : center;">
  <a class="nav-link" href="category.php">Catégories</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ventesFlash.php">Ventes Flash</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="account.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Votre compte
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="account.php">Vos informations</a>
          <a class="dropdown-item" href="account.php">Vos commandes</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="register.html">Vous connecter</a> <!-- Register.php -->
        </div>
      </li>
      <li class="active">
        <a class="nav-link" href="bucket.html" tabindex="-1" aria-disabled="false">Mon panier</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register-admin.html">Vendre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href= "register-admin.html">Admin</a>
      </li>
    </ul>



    </form>
  </div>
</nav>
</div>
</nav>
</head>


<body>
  <br>
  <div class="card text-center">
  <div class="card-header">
    Confirmation de commande
  </div>
  <div class="card-body">
    <h5 class="card-title">Vote commande a bien été enregistrée et réglée</h5>
    <p class="card-text">Merci d'avoir fait confiance à ECE-Amazon pour vos achats. A bientôt sur notre page !</p>
    <form method="POST" action="">
      <input type="submit" value="Recevoir un mail de confirmation" name="mailform"/>
    </form>
    <a href="home.php" class="btn btn-primary">Revenir à la page d'accueil</a>
  </div>
</div>
</body>

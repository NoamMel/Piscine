<?php
if (isset($_POST['mailform']))
{
	ini_set( 'display_errors', 1 );
 
    error_reporting( E_ALL );
 
    $from = "theodorasafi@me.com";
 
    $to = "theodora.safi@edu.ece.fr";
 
    $subject = "Confirmation commande";
 
    $message = "Votre commande a bien été passée, nous vous remercions de votre confiance";
 
    $headers = "From: ECE-Amazon".$from;
 
    mail($to,$subject,$message, $headers);
 
    echo "Votre commande a bien été passée. À bientôt sur ECE-Amazon ;) ";
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

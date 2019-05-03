<!DOCTYPE html>
<html>
<head>
	<title> Panier </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="icone.png" />
    <link rel="stylesheet" type="text/css" href="home.css"/>
    <meta charset="utf-8">
    <title>Ece-amazon.fr : meilleur site de e-commerce de France <?php /* Code PHP */ ?></title>

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
            <a class="nav-link dropdown-toggle" href="account.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Votre compte
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="account.html">Vos informations</a>
              <a class="dropdown-item" href="account.html">Vos commandes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="register.html">Vous connecter</a> <!-- Register.php -->
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="bucketFORM.php" tabindex="-1" aria-disabled="false">Mon panier</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</nav>
</head>
</head>
<body>
	<br>
	<div id="panier">
		<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Libellé</th>
      <th scope="col">Prix Unitaire</th>
			<th scope="col">Catégorie</th>
    </tr>
  </thead>
	<tbody>
		<?php
    		$mysqli= new PDO("mysql:host=localhost;dbname=eceamazon","root","");
          	$requete=$mysqli->query("SELECT * FROM panier");
          	$somme=0;
						$i=1;
          	while($ligne=$requete->fetch()){
          		?>
          		<!-- Nom de l'article :--><tr>
							<td> <?php echo $i; ?> </td>
							<td> <?php echo $ligne['Nom']; ?> </td>
          		<!--Catégorie de l'article : --><td><?php echo $ligne['Prix']; ?> €</td>
          		<!--Prix de l'article : --><td><?php echo $ligne['Categorie']; ?></td>
          		<form method="POST" action="bucket.php">
          		<input type="hidden" name="nom" value=" <?php echo $ligne['Nom']; ?>">
          		<input type="hidden" name="categorie" value=" <?php echo $ligne['Categorie'];?>">
          		<input type="hidden" name="prix" value="<?php echo $ligne['Prix'];?>">
          		<?php

          		$somme+=$ligne['Prix'];
							$i+=1;

          	}
          	?>
					</table>
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div style="float:right;">
							Prix total a payer : <?php echo $somme; ?> €.
					</div>
					<br><br>
          		<a href="register-acheteur-paiement.html"><input type="submit" name="payer" style="float: right;" value="Passer au paiement"></a>
          	</form>

          </div>
</body>
</html>

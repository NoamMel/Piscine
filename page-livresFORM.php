<!DOCTYPE html>
<html>
<head>
	<title> kuybiu</title>
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
            <a class="nav-link" href="bucket.html" tabindex="-1" aria-disabled="false">Mon panier</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</nav>
</head>
<body>
    <div id="boutton-article">
    	
    		<?php
    		$mysqli= new PDO("mysql:host=localhost;dbname=eceamazon","root","");
          	$requete=$mysqli->query("SELECT * FROM livres");

          	while($ligne=$requete->fetch()){
          		?>
          		Nom de l'article : <?php echo $ligne['Nom']; ?> <br>
          		Photo de l'article : <img src="<?php echo $ligne['Photo1']; ?>">
          		Deuxieme photo de l'article : <img src="<?php echo $ligne['Photo2']; ?>">
          		Descrpition de l'article : <?php echo $ligne['Description']; ?> <br>
          		Prix : <?php echo $ligne['Prix']; ?> <br>
          		Quantité restante : <?php echo $ligne['Quantite']; ?>
          		
          <form method="POST" action="page-livres.php">
          		<input type="hidden" name="id" value=" <?php echo $ligne['Identification']; ?>">
          		<input type="hidden" name="nom" value=" <?php echo $ligne['Nom'];?>"> 
          			
          		
          		<input type="hidden" name="photo1" value="<?php echo $ligne['Photo1'];?>">
          			
          		
          		<input type="hidden" name="photo2" value="<?php echo $ligne['Photo2'];?>">
          			
          		<input type="hidden" name="description" value="<?php echo $ligne['Description'];?>">
          			
          		<input type="hidden" name="prix" value="<?php echo $ligne['Prix'];?>">
          			
          		<input type="hidden" name="quantite" value="<?php echo $ligne['Quantite'];?>">
          			 
          		<input type="submit" name="misdanspanier" value="Ajouter l'article dans le panier">
          	</form>
          
          		<?php
          	}
          	?>
    	
    </div>
 


</body>
</html>
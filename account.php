<!DOCTYPE html>
<html>

<head>
  <title>Ece-amazon.fr : meilleur site de e-commerce de France <?php /* Code PHP */ ?></title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="icon" type="image/png" href="icone.png" />
  <link rel="stylesheet" type="text/css" href="account.css"/>

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
          <li class="active">
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
          <li class="nav-item">
            <a class="nav-link" href="bucket.html" tabindex="-1" aria-disabled="false">Mon panier</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ajout-article.html">Vendre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.html">Admin</a>
          </li>
        </ul>
      </div>
    </nav>
</nav>


</head>

<body>
<p>
  <br>
  <br>
<section id="content">
  <div class="container">
  <div class="form-group row">
  <div class="card" style="width: 48rem; margin-left:100px;">
    <p>
    <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Votre adresse de livraison</a>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Vos informations personnelles</button>
  </p>
      <div class="collapse multi-collapse" id="multiCollapseExample1">
        <div class="card card-body">
          <!--Mettre l'adresse de livraison -->
          Adresse de livraison : <?php echo $userinfo['Adresse']; ?>
      </div>
    </div>
      <div class="collapse multi-collapse" id="multiCollapseExample2">
        <div class="card card-body">
          <!--Mettre les infos personnelles avec du php et BDD, nom, prenom, mail, tel etc...-->
         <h2>Profil de <?php echo $userinfo['Prenom']; ?></h2>
         <br /><br />
         Nom : <?php echo $userinfo['Nom']; ?>
         <br />
         Prénom : <?php echo $userinfo['Prenom']; ?>
         <br />
         Pseudo : <?php echo $userinfo['Pseudo']; ?>
         <br />
         Mail : <?php echo $userinfo['Mail']; ?>
         <br />
         Mot de passe : <?php echo $userinfo['MotdePasse']; ?>
         <br />
        </div>
      </div>
    </div>
  <section style="float:right;">
  <div class="card" style="width: 25rem;height :17rem; margin-left:890px; margin-top:-56px;">
    <!-- Mettre photo de profil -->
    <p>Votre photo de profil</p>
    <a class="image featured"><img src="imageProfil.png" alt="" style="width:auto;height:200px;" /></a>
  </div>
  </section>
  </div>
</div>
</section>
<!--  Sidebar de droite -->

</div>
</div>
</body>

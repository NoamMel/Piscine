<!DOCTYPE html>
<html>

<head>
   <title>Ece-amazon.fr : meilleur site de e-commerce de France <?php /* Code PHP */ ?></title>
   <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="ventesFlash2.css"/>
   <link rel="icon" type="image/png" href="icone.png" />

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
      <li class="nav-item">
        <a class="nav-link" href="bucketFORM.php" tabindex="-1" aria-disabled="false">Mon panier</a>
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
<!-- Saut de ligne -->

<br>

<!-- Livre -->
<form action="article.php" method="post">

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Livres (cliquez pour afficher)
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <img src="lettresPersanes2.jpg" style="width:auto; height:190px;"/>
        <img src="harryPotter.jpg" style="width:auto; height:190px;">
        <img src="lettresPersanes.jpeg" style="width:auto; height:190px;">
        <img src="miserables.jpg" style="width:auto; height:190px;">
      </div>
    </div>
  </div>
  <!-- Musique -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Musique (cliquez pour afficher)
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <img src="music1.jpg" style="width:130px; height:130px;">
        <img src="music2.jpg" style="width:130px; height:130px;">
        <img src="music3.jpg" style="width:130px; height:130px;">
        <img src="music4.jpg" style="width:auto; height:150px;">
        <img src="music5.jpg" style="width:auto; height:150px;">
      </div>
    </div>
  </div>
<!-- Vêtements -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Vêtements (cliquez pour afficher)
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <button type="submit" name="clothes2"><img src="clothes2.jpeg" style="width:auto; height:130px;"></button>
        <button type="submit" name="clothes3"><img src="clothes3.jpg" style="width:auto; height:130px;"></button>
        <button type="submit" name="clothes4"><img src="clothes4.jpg" style="width:auto; height:130px;"></button>
        <button type="submit" name="clothes5"><img src="clothes5.jpeg" style="width:auto; height:130px;"></button>
        <button type="submit" name="clothes6"><img src="clothes6.jpeg" style="width:auto; height:130px;"></button>

      </div>
    </div>
  </div>
<!-- Sports et loisirs -->
<div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Sports et loisirs (cliquez pour afficher)
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <img src="sports1.jpg" style="width:auto; height:130px;">
        <img src="sports2.jpg" style="width:auto; height:130px;">
        <img src="sports3.jpg" style="width:auto; height:130px;">
        <img src="sports4.jpg" style="width:auto; height:130px;">
        <img src="sports5.jpg" style="width:auto; height:130px;">
      </div>
    </div>
  </div>
</div>

</form>
  <!-- Bas de page -->

  <div class="footer">
      <div class="nav-top">
        <a href="#">Revenir en haut de page</a><br>
      </div>
      <div class="footer-center" style="margin-left: 500px;">

        <div class="row">
          <div class="col-3 col-6-medium col-12-small">

            <!-- Links -->
            <section class="widget links">
              <h3>A propos de nous</h3>
              <ul class="style2">
                <li><a href="https://www.ece.fr/ecole-ingenieur/">À propos de notre entreprise</a></li>
              </ul>
            </section>

          </div>
          <div class="col-3 col-6-medium col-12-small">

            <!-- Links -->
            <section class="widget links">
              <h3>Besoin d'aide ?</h3>
              <ul class="style2">
                <li><a href="tarifs.php">Tarifs et options de livraisons</a></li>
                <li><a href="help.php">Aide</a></li>
              </ul>
            </section>
          </div>
        </div>

      </div>
  </div>
</body>
</html>

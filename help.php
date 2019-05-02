<!DOCTYPE html>
<html>

<head>
   <title>Ece-amazon.fr : meilleur site de e-commerce de France <?php /* Code PHP */ ?></title>
   <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="help.css"/>

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
      <li class="nav-item">
        <a class="nav-link" href="ajout-article.html">Vendre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.html">Admin</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
</nav>
</head>

<body>

<!-- Principal -->
        <div id="main-wrapper">
          <div class="container">
            <div class="row gtr-200">
              <div class="col-8 col-12-medium">
                <div id="content">

                  <!-- Contenu de la page aide -->
                    <article>

                      <h2>Vous rencontrez un problème ? Besoin d'aide ?</h2>

                      <p><img src="frustrationcomputer.jpg" class="d-block w-100" alt="Image rubrique aide"></p>

                      <h3>Si vous recevez des emails ou messages suspicieux</h3>

                      <p>Si vous avez reçu un e-mail ou un SMS inattendu ou suspicieux concernant votre compte Ece-Amazon, ou une commande que vous n'avez pas passée, veuillez dans un premier temps vous rendre sur notre page d'Aide afin de déterminer si l’e-mail provient réellement de notre entreprise. Si vous souhaitez simplement nous informer que vous avez reçu un e-mail suspicieux, faites suivre le message à l'adresse suivante stop-arnaque@edu.ece.fr. Si vous avez besoin de plus d'informations nécéssaires veullez contacter notre numéro client : 01 42 92 81 00.</p>
                    </article>

                </div>
              </div>


  <!-- Bas de page -->

  <footer>
    <div id="footer-wrapper">
          <footer id="footer" class="container">
            <div class="nav-top">
              <a href="#">Revenir en haut de page</a>
            </div>
            <div class="footer-center">
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
                    <h3>Vendez !</h3>
                    <ul class="style2">
                      <li><a href="sell.html">Vendez sur ECE-Amazon</a></li>
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
        </footer>
        </div>
      </footer>
</body>
</html>

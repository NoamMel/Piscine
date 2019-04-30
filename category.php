<!DOCTYPE html>
<html>

<head>
   <title>Ece-amazon.fr : meilleur site de e-commerce de France <?php /* Code PHP */ ?></title>
   <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="home.css"/>

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
          <a class="dropdown-item" href="register.php">Vous connecter</a> <!-- Register.php -->
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bucket.php" tabindex="-1" aria-disabled="false">Mon panier</a>
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
  <!-- Contenu -->
        <section id="content">
          <div class="container">
            <div class="row">
              <div class="col-3 col-12-medium">

                <!-- Sidebar de gauche -->
                  <section>
                    <header>
                      <h2>Livres</h2>
                    </header>
                    <p>
                      Trouvez le livre qu'il vous faut dans toutes nos rubriques !
                      <img src="livre2.jpg" class="d-block w-100" alt="Image Livres2">
                    </p>
                    <ul class="link-list">
                      <li><a href="#">Sed dolore viverra</a></li>
                      <li><a href="#">Ligula non varius</a></li>
                      <li><a href="#">Dis parturient montes</a></li>
                      <li><a href="#">Nascetur ridiculus</a></li>
                    </ul>
                  </section>
                  <section>
                    <header>
                      <h2>Musique</h2>
                    </header>
                    <p> Meilleures ventes CD, nouveautés CD, sorties à venir et promotions ! 
                      <img src="musiquevinyle.jpg" class="d-block w-100" alt="Image musique">
                    </p>
                    <ul class="link-list">
                      <li><a href="#">Sed dolore viverra</a></li>
                      <li><a href="#">Ligula non varius</a></li>
                      <li><a href="#">Nec sociis natoque</a></li>
                      <li><a href="#">Penatibus et magnis</a></li>
                      <li><a href="#">Dis parturient montes</a></li>
                      <li><a href="#">Nascetur ridiculus</a></li>
                    </ul>
                  </section>
              </div>
              <div class="col-6 col-12-medium imp-medium">

                <!-- Contenu du milieu, principal -->
                  <section>
                    <header>
                      <h2>Sports et loisirs</h2>
                      <h3>Bienvenue dans la boutique sports et loisirs de l'ECE-Amazon</h3>
                    </header>
                    <p>
                      Retrouvez tout le matériel nécéssaire pour la musculation, randonnée, camping, cyclisme, football, running, golf et même pour la glisse urbaine !
                    </p>

                    <p>
                      <img src="sportLoisir2.jpg" class="d-block w-100" alt="Image category1">
                    <p>
                    <!-- IMAGE SPORT ET LOISIRS -->
                    <img src="sportLoisir.jpg" class="d-block w-100" alt="Image category2">
                    </p>
                  </section>

              </div>
              <div class="col-3 col-12-medium">

                <!--  Sidebar de droite -->
                  <section>
                    <header>
                      <h2>Vêtements</h2>
                    </header>
                    <p> Composez votre look avec nos jeans bruts ou t-shirts colorés !
                      <img src="amazonFashion.jpg" class="d-block w-100" alt="Image musique"></p>
                    <ul class="link-list">
                      <li><a href="#">Sed dolore viverra</a></li>
                      <li><a href="#">Ligula non varius</a></li>
                      <li><a href="#">Nec sociis natoque</a></li>
                      <li><a href="#">Penatibus et magnis</a></li>
                      <li><a href="#">Dis parturient montes</a></li>
                      <li><a href="#">Nascetur ridiculus</a></li>
                    </ul>

              </div>
            </div>
          </div>
        </section>
        
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
                      <li><a href="#">À propos de notre entreprise</a></li>
                      <li><a href="#">Carrières</a></li>
                    </ul>
                  </section>
              </div>

              <div class="col-3 col-6-medium col-12-small">

                <!-- Links -->
                  <section class="widget links">
                    <h3>Vendez !</h3>
                    <ul class="style2">
                      <li><a href="sell.php">Vendez sur ECE-Amazon</a></li>
                      <li><a href="#">Devenez partenaires</a></li>
                    </ul>
                  </section>

              </div>

              <div class="col-3 col-6-medium col-12-small">

                <!-- Links -->
                  <section class="widget links">
                    <h3>Besoin d'aide ?</h3>
                    <ul class="style2">
                      <li><a href="account.php">Voir ou suivre vos commandes</a></li>
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
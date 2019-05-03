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
  <link rel="stylesheet" type="text/css" href="article.css"/>

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
            <a class="nav-link" href="register-admin.html">Vendre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href= "register-admin.html">Admin</a>
          </li>
        </ul>
      </div>
    </nav>
  </nav>


</head>

<body>
  <br>
  <section>
    <header style="text-align:center;">
      <h2></h2>
    </header>
    <!-- Mode -->
    <div class="card" style="width: 70rem; height: 50rem; margin-right:auto; margin-left:auto;">
      <?php

      if(isset($_REQUEST['clothes2'])){
        echo '<img src="clothes2.jpeg" style="display: block; width: 600px; height: 550px;" alt="livre">
        <img src="https://i.ebayimg.com/images/g/SfkAAOSw8mtcaaHf/s-l300.jpg" style="width: 10rem" class="card-img-bottom" alt="livre">';
      }
      if(isset($_REQUEST['clothes3'])){
        echo '<img src="clothes3.jpg" style="display: block; width: 600px; height: 550px;" alt="livre">
        <img src="https://i2.cdscdn.com/pdt2/0/7/6/1/550x550/mp06664076/rw/dredown-hello-i-m-an-orc-enfant-pull.jpg" style="width: 10rem" class="card-img-bottom" alt="livre">';
      }
      if(isset($_REQUEST['clothes4'])){
        echo '<img src="clothes4.jpg" style="display: block; width: 470px; height: 550px;" alt="livre">
        <img src="https://lsco.scene7.com/is/image/lsco/Levis/clothing/726930012-front-pdp.jpg?$regular_desktop$&amp;id=eAHre1&amp;fmt=jpg&amp;fit=constrain,1&amp;wid=782&amp;hei=627" style="width: 10rem" class="card-img-bottom" alt="livre">';
      }
      if(isset($_REQUEST['clothes5'])){
        echo '<img src="clothes5.jpeg" style="display: block; width: 650px; height: 550px;" alt="livre">
        <img src="data:image/jpeg;base64,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" style="width: 10rem" class="card-img-bottom" alt="livre">';
      }
      if(isset($_REQUEST['clothes6'])){
        echo '<img src="clothes6.jpeg" style="display: block; width: 500px; height: 550px;" alt="livre">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKAAAAB4CAMAAABCfAldAAAAb1BMVEX////jAQ/jAA/hAAD75ub99PXjAATzs7XoX2DlMDP509XlRUfeAADtgoTjAAjxoKP97/D3wML2x8jse373zM7++vrth4r63d7hFxrxq6zkP0DqZ2vmT1PlVFbukZPgDBThJijqc3XhHyHumJniNDgVNk0uAAADS0lEQVR4nO1Z3ZqiMAwFIr/WSisIKAo68/7PuGkQkdFdL6Q6H5tzUaZpweM5bRocx2EwGAwGg8FgMBjWsZge/pT88ggmRzglQScCd2JMTtAzT6Xm0l6uP5qHwdENl5ANgp5Lzc/r8+CjGf+lgr+eIFs8e4Js8asEWcHZE2SLZ0+QLX6VICs4e4Js8ewJssWvEmQFZ0/wuZsjivcz3JvgJxT0bn9du1dQUvSTFgvtp6m/XJn2C34Oy/PCV6JX+iMWi8RMXa5Mu4bxDJTv7DuZAPigxReC24HgdVjGRwmpo8Vy1f0UalVBNwB5o4+kpTUouNdaZxtSysMxaabB0UmV7xTad77BsoIgoI1d0XFEdqKJW4xdFaxBIHA+shMQx8KMweL6qArsbhKoVY6BxVdrQuAe6aOTDQS9gqciSYoteFAeCxpbocR7tTC35UVV2yNIXm3zS6hAr6BJ+hkK5HgNwvcw1gYAhxT/yloAq5sEVkMsKQM3G7oVjHdxkAxjClxBajrbfvPYIRicST8dGjWclSAu4W6pzXU3IihISD9UdP8eKvxGEf1lMw/ChhgB7MxVkSoJ5rbSLMRqTJA6uPzW3S0n85DKSXY2LfYgu3Rgjzi05t9ZSYVYENMRQdP6IGFn1E5KiI7YqcCmxZjyDIV0CZdjN8pv5xTjNdiFPNkagmksiRomJ6snSU/QfUQwbf9J0DOJ23axALrruCLE4yJsjMVr0TSNRDRjiyntoas1rYPmPfVgt0mUEGY/4slqlt6iRC3ruj7UY4K0XLcgKnMNaWvYL/llSfml0OTtCSiVZJsTCfs1JkjfxdFdpjzAOxQ0jz0NsRCkVENXB+NNIm7GqrtiyN5Rt+k3hsaDBMrrUZKdYXzUBWd9/SqNvCsjbRULHrRVluaF2gvzoYGIVOGbLp6xsFaI3V4rpbHcCuCkijxPVGSSy7sUdL0A3Dg+dy8dpp6BMo7Lrku5JxjeSfqxR4W4xYoa87WUN69pJsXcFNp9vU1EurF3vXY+K/n/GnwXQf7pY/YE2eJXCbKCsyfIFs+eIFv8KkFWcPYE2eLZE2SLXyXICs6eIFs8Y4J5BMHEmFjBfRtPjHJagv70yJ9/KoPBYDAYDAaD8evxBwQHSrvHlSy3AAAAAElFTkSuQmCC" style="width: 10rem" class="card-img-bottom" alt="livre">';
      }

       ?>
        <!-- <img src="amazonFashion.jpg" style="height: 550px;" alt="livre"> -->
        <!-- <img src="musiquevinyle.jpg" style="width: 10rem" class="card-img-bottom" alt="livre"> -->


        <form action="bucket.html" method="post">
      <div class="card-body text-right" style="margin-top: -680px;">
        <!-- Dynamique -->
        <h3 class="card-title">Article n</h3>
        <!-- Statique -->
        <p class="card-text">Description</p>
        <textarea style="border:none; resize:none; text-align: right;" readonly="readonly" cols="63" rows="5">
          <!-- Dynamique -->
          Tailles zertyuio poiuytre rtyuioiu ytrtyui uytrtyui oiuytrtyu iopoiuy trtyuibr ghjkiuy trderf
        <!-- Statique -->
        </textarea>
        <p>Sélectionez la taille</p>
        <div class="input-group-prepend card-body text-right" id="selector">
          <button class="btn btn-outline-secondary" type="button">XS</button>
          <button class="btn btn-outline-secondary" type="button">S</button>
          <button class="btn btn-outline-secondary" type="button">M</button>
          <button class="btn btn-outline-secondary" type="button">L</button>
          <button class="btn btn-outline-secondary" type="button">XL</button>
        </div><br><br><br><br>
        <script type="text/javascript">
          $('#selector button').click(function() {
    $(this).addClass(' active').siblings().removeClass('active');
});
        </script>

        <p>Sélectionnez la couleur</p>
        <div class="input-group-prepend card-body text-right" id="selector">
          <button class="btn btn-outline-secondary" type="button" style="background-color: black;"></button>
          <button class="btn btn-outline-secondary" type="button" style="background-color: red;"></button>
          <button class="btn btn-outline-secondary" type="button" style="background-color: lightblue;"></button>
          <button class="btn btn-outline-secondary" type="button" style="background-color: green;"></button>
          <button class="btn btn-outline-secondary" type="button" style="background-color: grey;"></button>
        </div><br><br><br>

        <br><br><br>
        <input type="button" onclick="alert('L\'article a correctement été ajouté au panier');" class="btn btn-primary" name="add" value="Ajouter au panier"/>
      </div>

      </form>
    </div>



  </body>

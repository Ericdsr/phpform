<?php

session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8" />
    <meta name="description" content="Activité PHP promo SIMPLON Boulogne sur Mer" />
    <meta name="keywords" content="HTML, CSS, PHP, Bootstrap, Bootswatch, SIMPLON, Boulogne" />
    <meta name="author" content="Nicolas HERBEZ" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />

    <title>PHP - Procédural</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/spacelab/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.1.3/dist/morph/bootstrap.min.css"> -->

</head>
<body>
    
<header class="d-none d-sm-block">

    <div class="card bg-dark rounded-0">
        <div class="row g-0">

            <div class="col-md-5">
                <img src="../images/php.png" alt="logo php" class="img-fluid rounded-start m-3">
            </div>

            <div class="col-md-7">
                <div class="card-body text-white">
                    <h1 class="card-title">PHP procédural</h1>
                    <p class="card-text">Créer le back-end permettant de sauvegarder des données en session à travers un formulaire 🙂</p>
                    <p class="card-text"><small class="text-muted">J'apprends et je me perfectionne</small></p>
                </div>
            </div>

        </div>
    </div>

    <div class="p-2 bg-dark mt-2"></div>
    <div class="p-1 bg-dark mt-2 mb-3"></div>

</header>
<div class="d-flex flex-row">
<nav class="d-flex justify-content-start flex-row  w-25 p-3 ">
    <div class="list-group d-flex ">
      <a href="index.php" class="list-group-item list-group-item-action" aria-current="true">
        Home
      </a>
      <a href="index.php?debugging" class="list-group-item list-group-item-action">Débogage</a>
      <a href="index.php?concatenation" class="list-group-item list-group-item-action">Concaténation</a>
      <a href="index.php?loop" class="list-group-item list-group-item-action">Boucle</a>
      <a href="index.php?function" class="list-group-item list-group-item-action">Fonction</a>
      <a href="index.php?del" class="list-group-item list-group-item-action">Supprimer</a>
    </div>
</nav>
<section class="d-flex justify-content-center w-75 h-25 p-3">
    <div class="btn-group " role="group" aria-label="Basic example">
      <button type="button" class="btn btn-primary">Ajouter des données</button>
    </div>
</section>
</div>
<footer Align='Center'>
    <p>© Eric Dsr 2023</p>
</footer>
</body>
</html>
<?php
session_start();
include './includes/head.inc.html';
include './includes/header.inc.html';
?>
<nav class="d-flex justify-content-start flex-row  w-25 p-3 ">
        <a href="index.php" class="list-group-item list-group-item-action" aria-current="true">
          Home
        </a>
        </nav>
<?php
    if (!empty($_SESSION)){
        include './includes/ul.inc.html';
        $table = $_SESSION['table'];
    }


    if (isset($_GET['add'])){
        include './includes/form.inc.html';
    }
    else if(isset($_POST['submit'])){
        $prenom = $_POST['first_name'];
        $nom = $_POST['last_name'];
        $age = $_POST['age'];
        $size = $_POST['size'];
        $civility = $_POST['civility'];

        $table = array(
            'first_name' => $prenom,
            'last_name' => $nom,
            'age' => $age,
            'size' => $size,
            'civility' => $civility,
        );
        $_SESSION['table'] = $table;
        echo "donnée save";
    }


    else if (isset($_GET['debugging'])){
        echo "<h1>debuggage</h1>";
        echo" <h2> ===> Lecture du tableau à l'aide de la fonction print_r() </h2>";
        echo "<pre>";
        print_r($table);
        echo "</pre>";
    }

    else if (isset($_GET['concatenation'])){
        echo " <h1>Concatenation</h1>";
        echo " <h2> ===> Construction d'une phrase avec le contenu du tableau  </h2>";
        echo  "<p>".$table['civility']." " .$table['first_name']." ".$table['last_name']."</p>";
        echo  "<p> J'ai ".$table['age']." ans et je mesure " .$table['size']." m. "."</p>";
        echo " <h2> ===> Construction d'une phrase aprés MAJ du tableau  </h2>";
        $table['first_name'] = ucfirst($table['first_name']);
        $table['last_name'] = strtoupper($table['last_name']);
        echo  "<p>".$table['civility']." " .$table['first_name']." ".$table['last_name']."</p>";
        echo  "<p> J'ai ".$table['age']." ans et je mesure " .$table['size']." m. "."</p>";
        echo " <h2> ===> Construction d'une virgule à la place du point pour la taille  </h2>";
        $table['size'] = str_replace(".",",",$table['size']);
        echo  "<p>".$table['civility']." " .$table['first_name']." ".$table['last_name']."</p>";
        echo  "<p> J'ai ".$table['age']." ans et je mesure " .$table['size']." m. "."</p>";
    }

    else if (isset($_GET['loop'])){
        foreach( $table as $value )
        echo $value . '<br />';
        echo " <h2>loop</h2>";
    }
    else if (isset($_GET['function'])){
        echo " <h2>function</h2>";
    }
    else if (isset($_GET['del'])){
        echo " <h2>delete</h2>";
        session_destroy();
    }
    else {
        echo "<a href='index.php?add' class='btn btn-primary'> Ajouter des données</a>";
    }
?>

</body>
</html>
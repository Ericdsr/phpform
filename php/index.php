<?php
session_start();
include './includes/head.inc.html';
include './includes/header.inc.html';
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">

            <a href="index.php" class="list-group-item list-group-item-action" aria-current="true">
              Home
            </a>
            <?php
    if (!empty($_SESSION)){
        include './includes/ul.inc.html';
        $table = $_SESSION['table'];
    }
    ?>
    </div>
    <div class="col">

    <?php
    if (isset($_GET['add'])){
        include './includes/form.inc.html';
    }
    else if (isset($_GET['addmore'])){
        include './includes/form2.inc.php';
    }
    else if(isset($_POST['submit'])){
        $prenom = $_POST['first_name'];
        $nom = $_POST['last_name'];
        $age = $_POST['age'];
        $size = $_POST['size'];
        $civility = $_POST['civility'];
        $html = $_POST['html'];
        $css = $_POST['css'];
        $javascript = $_POST['javascript'];
        $php = $_POST['php'];
        $mysql = $_POST['mysql'];
        $bootstrap = $_POST['bootstrap'];
        $symfony = $_POST['symfony'];
        $react = $_POST['react'];
        $color = $_POST['color'];
        $date = $_POST['date'];
        $file = $_POST['file'];

        
        $table = array(
            'first_name' => $prenom,
            'last_name' => $nom,
            'age' => $age,
            'size' => $size,
            'civility' => $civility,
            'html' => $html,
            'css' => $css,
            'javascript' => $javascript,
            'php' => $php,
            'mysql' => $mysql,
            'bootstrap' => $bootstrap,
            'symfony' => $symfony,
            'react' => $react,
            'color' => $color,
            'date' => $date,
            'file' => $file,
        );
        $_SESSION['table'] = $table;
        echo "données save";
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
        echo " <h2>Boucle</h2>";
        echo " <h2> ===> Lecture à l'aide d'une boucle foreach  </h2>";
        $loop = 0;
        foreach( $table as $key => $value )
        echo "à la ligne n° ". $loop++ ." correspond la clé ". $key  ." et contient ". $value ."<br>" ;
    }
    else if (isset($_GET['function'])){
        echo " <h2>function</h2>";
        echo " <h2> ===> J'utilise ma function readTable()  </h2>";
        readTable($table);
    }
    else if (isset($_GET['del'])){
        echo " <h2>delete</h2>";
        session_destroy();
    }
    else {
        echo "<div class='col-md-9'><a href='index.php?add' class='btn btn-primary'> Ajouter des données</a></div>";
        echo "<div class='col-md-9'><a href='index.php?addmore' class='btn btn-primary'> Ajouter Plus de données</a></div>";
    }
    function readTable($table){
        $loop = 0;
            foreach( $table as $key => $value )
            echo "à la ligne n° ". $loop++ ." correspond la clé ". $key  ." et contient ". $value ."<br>" ;
    }
?>
            
            </div>
    </div>
</div>
</body>
</html>
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
        include './includes/ul.inc.php';
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
    //tableau
    else if(isset($_POST['submit'])){

        if (!empty($_POST['first_name'])){$prenom = $_POST['first_name'];} else {$prenom = "";}
        if (!empty($_POST['last_name'])){$nom = $_POST['last_name'];} else {$nom = "";}
        if (!empty($_POST['age'])){$age = $_POST['age'];} else {$age = "";}
        if (!empty($_POST['taille'])){$taille = $_POST['taille'];} else {$taille = "";}
        if (!empty($_POST['civility'])){$civility = $_POST['civility'];} else {$civility = "";}

        $table = array(
            'first_name' => $prenom,
            'last_name' => $nom,
            'age' => $age,
            'size' => $taille,
            'civility' => $civility,);

            $_SESSION['table'] = $table;
            echo '<div class="bg-success p-2 mt-2 text-dark bg-opacity-25">Données Save</div>';
    }

    // tableaux 2
    else if(isset($_POST['submit_more'])){

        if (!empty($_POST['first_name'])){$prenom = $_POST['first_name'];} else {$prenom = "";}
        if (!empty($_POST['last_name'])){$nom = $_POST['last_name'];} else {$nom = "";}
        if (!empty($_POST['age'])){$age = $_POST['age'];} else {$age = "";}
        if (!empty($_POST['taille'])){$taille = $_POST['taille'];} else {$taille = "";}
        if (!empty($_POST['civility'])){$civility = $_POST['civility'];} else {$civility = "";}
        if (!empty($_POST['html'])){$html = $_POST['html'];} else {$html = "";}
        if (!empty($_POST['css'])){$css = $_POST['css'];} else {$css = "";}
        if (!empty($_POST['javascript'])){$javascript = $_POST['javascript'];} else {$javascript = "";}
        if (!empty($_POST['php'])){$php = $_POST['php'];} else {$php = "";}
        if (!empty($_POST['mysql'])){$mysql = $_POST['mysql'];} else {$mysql = "";}
        if (!empty($_POST['bootstrap'])){$php = $_POST['bootstrap'];} else {$bootstrap = "";}
        if (!empty($_POST['symfony'])){$symfony = $_POST['symfony'];} else {$symfony = "";}
        if (!empty($_POST['react'])){$react = $_POST['react'];} else {$react = "";}
        if (!empty($_POST['color'])){$color = $_POST['color'];} else {$color = "";}
        if (!empty($_POST['date'])){$date = $_POST['date'];} else {$date = "";}
        if (!empty($_POST['size'])){$fichier = $_POST['size'];} else {$fichier = "";}
        if (!empty($_POST['file'])){$file = $_POST['file'];} else {$file = "";}
        if (!empty($_FILES['file']['tmp_name'])){$tmpName = $_FILES['file']['tmp_name'];} else {$tmpName = "";}
        if (!empty($_FILES['file']['name'])){$name = $_FILES['file']['name'];} else {$name = "";}
        if (!empty($_FILES['file']['type'])){$type = $_FILES['file']['type'];} else {$type = "";}
        if (!empty($_FILES['file']['size'])){$size = $_FILES['file']['size'];} else {$size = "";}
        if (!empty($_FILES['file']['error'])){$error = $_FILES['file']['error'];} else {$error = "";}
    
        
        // Traitement d'image. 

        $upload = './uploaded/' .'image1.png';

        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        $imageFileType = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));
        
        if ($_FILES["file"]["size"] > 2 * 1024 * 1024) {
            echo '<div class="bg-danger p-2 text-center text-dark bg-opacity-25"> Veuillez choisir un fichier de taille inférieure.</div>';
        }  else if (move_uploaded_file($_FILES["file"]["tmp_name"], $upload)) {
            echo '<div class="bg-success p-2 mt-2 text-dark bg-opacity-25">Image uploadée avec succés</div>';
        } else {
            echo '<div class="bg-danger p-2 text-center text-dark bg-opacity-25"> Veuillez choisir un fichier de taille inférieure.</div>';
        }
        if (!in_array($imageFileType, $allowedExtensions)) {
            echo '<div class="bg-danger p-2 text-center text-dark bg-opacity-25"> Que JPG,JPEG,PNG,GIF</div>';
        }
        else {
            echo '<div class="bg-success p-2 mt-2 text-dark bg-opacity-25">Télécharger avec sucess</div>';
        }

        $table = array(
            'first_name' => $prenom,
            'last_name' => $nom,
            'age' => $age,
            'size' => $taille,
            'civility' => $civility,
            'html' => $html,
            'css' => $css,
            'javascript' => $javascript,
            'php' => $php,
            'mysql' => $mysql,
            //'bootstrap' => $bootstrap,
            'symfony' => $symfony,
            'react' => $react,
            'color' => $color,
            'date' => $date,
            'img' => $file = array(
                'name' => $name,
                'type' => $type,
                'tmp_name' => $tmpName,
                'error' => $error,
                'size' => $size,
            )
        );
         
        $_SESSION['table'] = $table;
        echo '<div class="bg-success p-2 mt-2 text-dark bg-opacity-25">Données Save</div>';
    }


    // debug
    else if (isset($_GET['debugging'])){

        echo "<h1>debuggage</h1>";
        echo" <h2> ===> Lecture du tableau à l'aide de la fonction print_r() </h2>";
        echo "<pre>";
        $table = array_filter($table);
        print_r($table);
        echo "</pre>";
    }


    // concatenation
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


    // loop
    else if (isset($_GET['loop'])){
        echo " <h2>Boucle</h2>";
        echo " <h2> ===> Lecture à l'aide d'une boucle foreach  </h2>";
        $loop = 0;
        foreach( $table as $key => $value )
        if($key == 'img'){
            echo "à la ligne n° ". $loop++ ." correspond la clé  img  et contient <br>" ;
            echo '<img src="./uploaded/image1.png" class="mw-100" alt="Description de l\'image">';
        }
        else{
            echo "à la ligne n° ". $loop++ ." correspond la clé ". $key  ." et contient ". $value ."<br>" ;
        }
    }


    // function
    else if (isset($_GET['function'])){
        echo " <h2>function</h2>";
        echo " <h2> ===> J'utilise ma function readTable()  </h2>";
        readTable($table);
    }


    // delete
    else if (isset($_GET['del'])){
        echo " <h2>delete</h2>";
        session_unset();
    }
    else {
        echo "<div class='col-md-9'><a href='index.php?add' class='btn btn-primary'> Ajouter des données</a></div>";
        echo "<div class='col-md-9'><a href='index.php?addmore' class='btn btn-secondary'> Ajouter Plus de données</a></div>";
    }
    function readTable($table){
        $loop = 0;
            foreach( $table as $key => $value )
            if($key == 'img'){
                echo "à la ligne n° ". $loop++ ." correspond la clé  img  et contient <br>" ;
                echo '<img src="./uploaded/image1.png" class="mw-100" alt="Description de l\'image">';
            }
            else{
                echo "à la ligne n° ". $loop++ ." correspond la clé ". $key  ." et contient ". $value ."<br>" ;
            }
    }
?>
<?php

include './includes/footer.inc.html';

?>
            
            </div>
    </div>
</div>
</body>
</html>
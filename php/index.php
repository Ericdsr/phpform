<?php
session_start();
include './includes/head.inc.html';
include './includes/header.inc.html';
$table = $_SESSION['table'];
?>

<?php
    include './includes/ul.inc.html';

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
        echo "<h2>debuggage</h2>";
        print_r($table);
    }

    else if (isset($_GET['concatenation'])){
        echo " <h2>concatenation</h2>";
    }

    else if (isset($_GET['loop'])){
        echo " <h2>loop</h2>";
    }
    else if (isset($_GET['function'])){
        echo " <h2>function</h2>";
    }
    else if (isset($_GET['del'])){
        echo " <h2>del</h2>";
    }
    else {
        echo "buttons";
    }
?>

</body>
</html>
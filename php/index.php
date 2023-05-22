<?php
session_start();
include './includes/head.inc.html';
include './includes/header.inc.html';
?>

<?php
    include './includes/ul.inc.html';

    if (isset($_GET['add'])){
        include './includes/form.inc.html';
    }


    else if (isset($_GET['debugging'])){
        echo "<h2>debuggage</h2>";
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
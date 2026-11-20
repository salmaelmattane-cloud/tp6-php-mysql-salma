<?php

$nom = "";

if (isset($_GET["nom"])) {

    $nom = $_GET["nom"];

}
$ville = "";

if (isset($_GET["ville"])) {

    $ville = $_GET["ville"];

}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>GET avec PHP</title>
</head>

<body>

    <h1>Exemple avec GET</h1>

    <?php

    if ($nom != "") {

        echo "<p>Bonjour " . $nom . "</p>";

    } else {

        echo "<p>Aucun nom reçu.</p>";

    }


    if ($ville != "") {

        echo "<p>Bonjour " . $ville . "</p>";

    } else {

        echo "<p>Aucune ville reçu.</p>";

    }

    ?>

</body>

</html>
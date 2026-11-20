<?php

$produit = "";
$categorie = "";
$prix = "";
$quantite = "";
$message = "";

if (
    isset($_POST["produit"])
    && isset($_POST["categorie"])
    && isset($_POST["prix"])
    && isset($_POST["quantite"])
) {

    $produit = $_POST["produit"];
    $categorie = $_POST["categorie"];
    $prix = $_POST["prix"];
    $quantite = $_POST["quantite"];

    if (
        $produit != ""
        && $prix > 0
        && $quantite > 0
    ) {

        $total = $prix * $quantite;

        $message = "Produit traité avec succès.";

    } else {

        $message = "Veuillez saisir des données valides.";

    }

}

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title>Formulaire produit</title>

</head>

<body>

    <h1>Ajouter un produit</h1>

    <form method="POST">

        <div>

            <label for="produit">
                Nom du produit :
            </label>

            <input
                type="text"
                id="produit"
                name="produit"
                required
            >

        </div>

        <br>

        <div>

            <label for="categorie">
                Catégorie :
            </label>

            <input
                type="text"
                id="categorie"
                name="categorie"
            >

        </div>

        <br>

        <div>

            <label for="prix">
                Prix :
            </label>

            <input
                type="number"
                id="prix"
                name="prix"
                min="1"
                required
            >

        </div>

        <br>

        <div>

            <label for="quantite">
                Quantité :
            </label>

            <input
                type="number"
                id="quantite"
                name="quantite"
                min="1"
                required
            >

        </div>

        <br>

        <button type="submit">
            Calculer
        </button>

    </form>


    <?php

    if ($message != "") {

        echo "<hr>";

        echo "<h2>" . $message . "</h2>";

    }

    ?>


    <?php

    if (
        isset($total)
        && $message == "Produit traité avec succès."
    ) {

    ?>

        <h2>Informations du produit</h2>

        <p>
            Produit :
            <?php echo htmlspecialchars($produit); ?>
        </p>

        <p>
            Catégorie :
            <?php echo htmlspecialchars($categorie); ?>
        </p>

        <p>
            Prix :
            <?php echo $prix; ?>
            DH
        </p>

        <p>
            Quantité :
            <?php echo $quantite; ?>
        </p>

        <p>
            Total :
            <?php echo $total; ?>
            DH
        </p>

    <?php

    }

    ?>

</body>

</html>
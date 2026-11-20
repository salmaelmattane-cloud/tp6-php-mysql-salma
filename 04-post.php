<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <title>Formulaire POST</title>

</head>

<body>

    <h1>Formulaire d'inscription</h1>

    <form method="POST">

        <div>

            <label for="nom">
                Nom :
            </label>

            <input
                type="text"
                id="nom"
                name="nom"
                required
            >

        </div>

        <br>

        <div>

            <label for="email">
                Email :
            </label>

            <input
                type="email"
                id="email"
                name="email"
                required
            >

        </div>

        <br>

        <div>

            <label for="age">
                Âge :
            </label>

            <input
                type="number"
                id="age"
                name="age"
                min="1"
                required
            >

        </div>

        <br>

        <div>

            <label for="ville">
                Ville :
            </label>

            <input
                type="text"
                id="ville"
                name="ville"
            >

        </div>

        <br>

        <div>

            <label for="message">
                Message :
            </label>

            <br>

            <textarea
                id="message"
                name="message"
                rows="4"
                cols="40"
            ></textarea>

        </div>

        <br>

        <button type="submit">
            Envoyer
        </button>

    </form>


    <?php

    if (
        isset($_POST["nom"])
        && isset($_POST["email"])
        && isset($_POST["age"])
        && isset($_POST["ville"])
        && isset($_POST["message"])
    ) {

        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $ville = $_POST["ville"];
        $message = $_POST["message"];

        echo "<hr>";

        echo "<h2>Données reçues par PHP</h2>";

        echo "<p>";
        echo "Nom : " . htmlspecialchars($nom);
        echo "</p>";

        echo "<p>";
        echo "Email : " . htmlspecialchars($email);
        echo "</p>";

        echo "<p>";
        echo "Âge : " . htmlspecialchars($age);
        echo "</p>";

        echo "<p>";
        echo "Ville : " . htmlspecialchars($ville);
        echo "</p>";

        echo "<p>";
        echo "Message : " . htmlspecialchars($message);
        echo "</p>";

    }

    ?>

</body>

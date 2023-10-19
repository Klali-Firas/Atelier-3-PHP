<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <fieldset>
        <label for="">Votre Nom : </label><input type="text" name="nom"><br>
        <label for="">Votre Prenom : </label><input type="text" name="prenom"><br>
        <label for="">Votre Age : </label><input type="text" name="age"><br>
        <label for="">Votre Adresse Mail : </label><input type="text" name="email"><br>
        <input type="submit" value="Inscrire" name="sub">
        <input type="submit" value="afficher" name="afficher">
    </fieldset>
    <?php
    if (isset($_POST['sub'])) {
        $name = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $age = htmlspecialchars($_POST['age']);
        if ($age and $name and $prenom and $email and str_contains($email, '@')) {
            echo "<script>alert('Linscription pour $name $prenom a ete prise en compte');</script>";
        }
    }
    if (isset($_POST["afficher"])) {
        echo "<table border>";
        foreach ($_POST as $key => $value) {
            if (htmlspecialchars($key) != "afficher") {
                echo "<tr><th>" . htmlspecialchars($key) . "</th><td>" . htmlspecialchars($value) . "</td></tr>";
            }
        }
        echo "</table>";
        echo "<hr>";
        var_dump($_POST);
        echo "<hr>";
        print_r($_POST);
    }

    ?>
</form>
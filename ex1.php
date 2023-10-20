<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <div class="container">
        <span class="navbar-brand">Atelier 3</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link link-success" href="ex1.php">Exercice 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ex2.php">Exercice 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Accueil.php">Exercice 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ex4.php">Exercice 4</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
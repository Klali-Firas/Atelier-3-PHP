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
                <li class="nav-item ">
                    <a class="nav-link " href="ex1.php">Exercice 1</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="ex2.php">Exercice 2</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link link-success" href="Accueil.php">Exercice 3</a>
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


<form method="GET">
    <label for="">Prenom : </label><input type="text" name="prenom"><br>
    <label for="">Repitions : </label><input type="text" name="rep"><br>
    <input type="submit" value="Envoyer" name="sub">
</form>
<?php
if (isset($_POST["sub"])) {
    header("location:Bienvenue.php");
}
?>
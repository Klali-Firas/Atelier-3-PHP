<form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <fieldset>
        <legend>Verification d'adresse IPv4</legend>
        <input type="number" name="n1" id="">
        <input type="number" name="n2" id="">
        <input type="number" name="n3" id="">
        <input type="number" name="n4" id=""><br>
        <input type="submit" value="Verifier" name="sub">
    </fieldset>
</form>
<?php
if (isset($_POST['sub'])) {
    $_ip = implode('.', array_slice($_POST, 0, count($_POST) - 1));
    // $_ip = $_POST['n1'] . "." . $_POST['n2'] . "." . $_POST['n3'] . "." . $_POST['n4'];
    require "fonction.php";
    validIP($_ip);
}
?>
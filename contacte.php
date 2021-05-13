<?php
require_once "header.html";

if (key_exists("mail", $_REQUEST) && key_exists("nom", $_REQUEST) && key_exists("missatge", $_REQUEST)) {
    $nom = $_REQUEST["nom"];
    $missatge = $_REQUEST["missatge"];
    $mail = $_REQUEST["mail"];

    if ($nom && $missatge && $mail) {
        if (mail("skills05@balearskills17.org", "Contacte $nom", $missatge, ["From" => $mail])) {
            echo "<script>alert('Missatge enviat')</script>";
        } else {
            echo "<script>alert('Missatge no enviat')</script>";
        }
    }
}

?>

<h1 class="text-center">Contacte</h1>

<div class="container mt-5">
    <form>
        <div class="row mt-2">
            <div class="col-3"></div>
            <div class="col">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom" required>
            </div>
            <div class="col">
                <label for="mail">Email</label>
                <input type="email" class="form-control" name="mail" id="mail" required>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-2">
            <div class="col-3"></div>
            <div class="col">
                <div class="form-group">
                    <label for="missatge">Missatge</label>
                    <textarea class="form-control" name="missatge" id="missatge" rows="3" required></textarea>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-3">
            <div class="col-3"></div>
            <div class="col">
                <input type="submit" class="btn btn-primary" value="Contacta">
            </div>
            <div class="col-3"></div>
        </div>
    </form>
</div>

<?php
require_once "footer.html";
?>
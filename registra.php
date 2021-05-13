<?php
require_once "header.html";
require_once "back/db.php";
?>

<h1 class="text-center">Registrat</h1>

<div class="container">
    <div class="row">
        <form id="registraform" method="POST">
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" required pattern="[A-Z][a-z]*">
                </div>
                <div class="col">
                    <label for="llinatges">Llinatges</label>
                    <input type="text" class="form-control" name="llinatges" id="llinatges">
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col">
                    <label for="dni">DNI</label>
                    <input type="text" class="form-control" name="dni" id="dni" required pattern="[0-9]{8}[A-Z]">
                </div>
                <div class="col">
                    <label for="telefon">Telefon</label>
                    <input type="tel" class="form-control" name="telefon" id="telefon" pattern="[0-9]{9}">
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col">
                    <label for="mail">Email</label>
                    <input type="email" class="form-control" name="mail" id="mail" required>
                </div>
                <div class="col">
                    <label for="password">Contrasenya</label>
                    <input type="password" class="form-control" name="password" id="password" required />
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col">
                    <input type="submit" class="btn btn-primary" value="Inicia" />
                </div>
                <div class="col-3"></div>
            </div>
        </form>
    </div>
</div>

<?php
require_once "footer.html";
?>
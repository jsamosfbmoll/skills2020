<?php
require_once "header.html";
?>

<h1 class="text-center">Registrat</h1>

<div class="container">
    <div class="row">
        <form>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col">
                    <label for="nom">Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom">
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
                    <input type="text" class="form-control" name="dni" id="dni">
                </div>
                <div class="col">
                    <label for="telefon">Telefon</label>
                    <input type="tel" class="form-control" name="telefon" id="telefon">
                </div>
                <div class="col-3"></div>
            </div>
            <div class="row mt-2">
                <div class="col-3"></div>
                <div class="col">
                    <label for="mail">Email</label>
                    <input type="email" class="form-control" name="mail" id="mail">
                </div>
                <div class="col">
                    <label for="password">Contrasenya</label>
                    <input type="password" class="form-control" name="password" id="password">
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

<!--
<usuari>
<nom>Maria</nom>
<llinatges>Arbona Sureda</llinatges>
<dni>18224566K</dni>
<telefon>687542163</telefon>
<email>mariaarbona45@gmail.com</email>
<password>12345678</password>
</usuari>
-->

<?php
require_once "footer.html";
?>
<?php
require_once "header.html";
?>

<h1 class="text-center">Contacte</h1>

<div class="container mt-5">
    <form>
        <div class="row mt-2">
            <div class="col-3"></div>
            <div class="col">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom">
            </div>
            <div class="col">
                <label for="mail">Email</label>
                <input type="email" class="form-control" name="mail" id="mail">
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-2">
            <div class="col-3"></div>
            <div class="col">
                <label for="">Missatge</label>
                <div class="form-group">
                    <label for="missatge"></label>
                    <textarea class="form-control" name="missatge" id="missatge" rows="3"></textarea>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-2">
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
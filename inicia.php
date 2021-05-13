<?php
require_once "header.html";
require_once "back/db.php";

if (isset($_REQUEST["password"]) && isset($_REQUEST["mail"])) {
    $query = $conexio->prepare("SELECT * FROM usuaris WHERE email = ? AND contrasenya = ?");
    $query->bind_param("ss", $_REQUEST["mail"], $_REQUEST["password"]);
    $usuari = $query->get_result();
    if ($usuari->num_rows) {
        session_start();
        $_SESSION[$usuari->fetch_object()->mail];
    }
}

?>

<h1 class="text-center">Inicia</h1>

<div class="container">
    <div class="row">
        <form>
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

<?php
require_once "footer.html";
?>
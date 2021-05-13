<?php
if (!key_exists("registre", $_REQUEST)) {
    header("Location: espais.php");
}
$registre = $_REQUEST["registre"];

require_once "header.html";
require_once "back/db.php";

if (key_exists("nom", $_REQUEST) && key_exists("mail", $_REQUEST) && key_exists("comentar", $_REQUEST) && key_exists("registre", $_REQUEST)) {
    $query = $conexio->prepare("INSERT INTO comentaris (usuari_email, espai_registre, fecha, hora, comentari) values (?, ?, ?, ?, ?)");
    $query->bind_param("sssss", $_REQUEST["mail"], $_REQUEST["registre"], date("Y-m-d"), date("H:i:s"), $_REQUEST["comentar"]);
    if (!$query->execute()) {
        echo "<script>alert('No se ha insertat el comentari')</script>";
    }
}

// echo date("Y-m-d");

// echo date("H:i:s");

?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Es Baluart</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>Es troba al baluard de Sant Pere, formant part de l'recinte emmurallat renaixentista que envoltava Palma fins a principis de segle XX. Un conjunt arquitectònic en el qual s'ha integrat el modern edifici dissenyat pels germans Lluís i Jaume García -Ruiz, Vicente Tomás i Ángel Sánchez. Està dividit en tres plantes que es relacionen amb l'exterior, les muralles i entre si mitjançant rampes, claraboies i grans balcons interiors.</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table">
                <thead>
                    <tr>
                        <th>Municipi</th>
                        <th>Adreça</th>
                        <th>Email</th>
                        <th>Web</th>
                        <th>Telèfon</th>
                        <th>Tipus</th>
                        <th>Gestor</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">Palma</td>
                        <td>Plaça de la Porta de Santa Catalina, 10</td>
                        <td>museu@esbaluard.org</td>
                        <td>www.esbaluard.org</td>
                        <td>971908200</td>
                        <td>Museu</td>
                        <td>admin@esbaluard.org</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">Modalitats: Pintura,Escultura,Fotografia,Vídeo</div>
                <div class="col">Serveis: Accés discapacitats, Cafeteria, Biblioteca</div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <a href="/exposicions.php">Exposicions a aquest espai</a>
        </div>
    </div>
</div>

<h2 class="text-center mt-5">Galería</h2>

<div class="container">
    <div class="row">
        <div class="col my-3"><img src="assets/img/galeria1.png" alt="gallery image"></div>
        <div class="col my-3"><img src="assets/img/galeria2.png" alt="gallery image"></div>
    </div>
</div>

<h2 class="text-center mt-5">Comentaris</h2>

<h3 class="text-center mt-3">Afegeix un comentari</h3>

<div class="container">
    <form method="POST">
        <input type="hidden" name="registre" value="<?= $registre ?>">
        <div class="row mt-2">
            <div class="col-3"></div>
            <div class="col">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom" required pattern="[A-Z][a-z]*">
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
                    <label for="comentar">Comentari</label>
                    <textarea class="form-control" name="comentar" id="comentar" rows="3" required></textarea>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-3">
            <div class="col-3"></div>
            <div class="col">
                <input type="submit" class="btn btn-primary" value="Comenta">
            </div>
            <div class="col-3"></div>
        </div>
    </form>
</div>

<h3 class="text-center mt-3">Comentaris dels ususaris</h3>

<?php

$query = $conexio->prepare("SELECT * FROM comentaris WHERE espai_registre = ? LIMIT 5");
$query->bind_param("s", $registre);
$query->execute();
$comentaris = $query->get_result();

while ($comentari = $comentaris->fetch_object()) {
?>
    <div class="container mb-5">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-2">
                <div class="row">
                    <div class="col">
                        <p><?= $comentari->usuari_email ?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><?= $comentari->fecha ?></div>
                    <div class="col"><?= $comentari->hora ?></div>
                </div>
            </div>
            <div class="col-6">
                <div class="comentari"><?= $comentari->comentari ?></div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
<?php
}
?>

<?php
require_once "footer.html";
?>
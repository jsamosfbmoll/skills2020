<?php
require_once "header.html";

require_once "back/db.php";

?>

<h1 class="text-center mt-3">Espais</h1>

<h2 class="text-center">Cercador d'espais</h2>
<div class="container my-4">
    <form id="espaisform" method="GET">
        <div class="form-group row text-center">
            <div class="col-4"></div>
            <div class="col">
                <label for="nom">Nom:</label>
                <input type="text" placeholder="Nom" name="nom" id="nom" pattern="[a-z]*"/>
                <input type="submit" value="Cercar" class="btn btn-primary" />
            </div>
            <div class="col-4"></div>
        </div>
    </form>
</div>

<h2 class="text-center">Resultats</h2>

<?php

$nom = "";

if (key_exists("nom", $_REQUEST)) {
    $nom = $_REQUEST["nom"];
    $query = $conexio->prepare("SELECT espais.*, municipi.nom as municipi_nom FROM espais INNER JOIN municipi ON municipi.id = espais.municipi_id WHERE espais.nom like '%".$nom."%'");
    // $query->bind_param("s", $nom);
    $query->execute();
    $espais = $query->get_result();
} else {
    $query = $conexio->prepare("SELECT espais.*, municipi.nom as municipi_nom FROM espais INNER JOIN municipi ON municipi.id = espais.municipi_id");
    $query->execute();
    $espais = $query->get_result();
}

if ($espais->num_rows > 0) {
    while ($espai = $espais->fetch_object()) {
?>

        <div class="container espai p-4 mt-3">
            <div class="row">
                <div class="col">
                    <h3><a href="espai.php?registre=<?= $espai->registre ?>"><?= $espai->nom ?></a></h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class=""><?= $espai->descripcio_cat ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">Municipi: <?= $espai->municipi_nom ?></div>
                <div class="col">Adreça: <?= $espai->adreca ?></div>
            </div>
        </div>

<?php
    }
}

?>

<!-- <div class="container espai p-4 mt-3">
    <div class="row">
        <div class="col">
            <h3><a href="espai.php">Es Baluart</a></h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="">Es troba al baluard de Sant Pere, formant part de l'recinte emmurallat renaixentista que envoltava Palma fins a principis de segle XX. Un conjunt arquitectònic en el qual s'ha integrat el modern edifici dissenyat pels germans Lluís i Jaume García -Ruiz, Vicente Tomás i Ángel Sánchez. Està dividit en tres plantes que es relacionen amb l'exterior, les muralles i entre si mitjançant rampes, claraboies i grans balcons interiors.</p>
        </div>
    </div>
    <div class="row">
        <div class="col">Municipi: Palma</div>
        <div class="col">Adreça: Plaça de la Porta de Santa Catalina, 10</div>
    </div>
</div> -->

<?php
require_once "footer.html";
$conexio->close();
?>
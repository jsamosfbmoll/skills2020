<?php
require_once "header.html";
?>

<h1 class="text-center mt-3">Espais</h1>

<h2 class="text-center">Cercador d'espais</h2>
<div class="container my-4">
    <form id="espaisform">
        <div class="form-group row text-center">
            <div class="col-4"></div>
            <div class="col">
                <label for="nom">Nom:</label>
                <input type="text" placeholder="Nom" name="nom" id="nom"/>
                <input type="submit" value="Cercar" class="btn btn-primary" />
            </div>
            <div class="col-4"></div>
        </div>
    </form>
</div>

<h2 class="text-center">Resultats</h2>

<div class="container espai p-4">
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
</div>

<?php
require_once "footer.html";
?>
<?php
require_once "header.html";
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

<div class="container mb-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-2">
            <div class="row">
                <div class="col">
                    <p>Nom</p>
                </div>
            </div>
            <div class="row">
                <div class="col">Data</div>
                <div class="col">Hora</div>
            </div>
        </div>
        <div class="col-6">
            <div class="comentari">El meu comentari es</div>
        </div>
        <div class="col-2"></div>
    </div>
</div>

<?php
require_once "footer.html";
?>
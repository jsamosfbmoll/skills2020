<?php
require_once "header.html";
?>

<h1 class="text-center mt3">Afegeix un espai</h1>

<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control">
            
        </div>
        <div class="col">
            <label for="registre">Registre</label>
            <input type="text" name="registre" id="registre" class="form-control">
        </div>
        <div class="col">
            <label for="municipi">Municipi</label>
            <select class="form-control" name="municipi" id="municipi">
                <option value="cat">Català</option>
                <option value="esp">Espanyol</option>
                <option value="ang">Àngles</option>
            </select>
        </div>
        <div class="col-1"></div>
    </div>
    <div class="row">
        <div class="col-1"></div>
        <div class="col">
            <label for="descripcio">Descripció</label>
            <textarea name="descripcio" id="descripcio" class="form-control"></textarea>
        </div>
        <div class="col-1"></div>
    </div>
</div>

<!--
<espai>
<nom>Es Baluart</nom>
<registre>ECP12345</registre>
<descripcions>
<cat>Es troba al baluard de Sant Pere, formant part de l'recinte emmurallat renaixentista que envoltava Palma fins a principis de segle XX. Un conjunt arquitectònic en el qual s'ha integrat el modern edifici dissenyat pels germans Lluís i Jaume García -Ruiz, Vicente Tomás i Ángel Sánchez. Està dividit en tres plantes que es relacionen amb l'exterior, les muralles i entre si mitjançant rampes, claraboies i grans balcons interiors.</cat>
<esp>Se encuentra en el baluarte de Sant Pere, formando parte del recinto amurallado renacentista que rodeaba Palma hasta principios del siglo XX. Un conjunto arquitectónico en el que se ha integrado el moderno edificio diseñado por los hermanos Lluís y Jaume García -Ruiz, Vicente Tomás y Ángel Sánchez. Está dividido en tres plantas que se relacionan con el exterior, las murallas y entre sí mediante rampas, claraboyas y grandes balcones interiores.</esp>
<eng>It is located in the bastion of Sant Pere, forming part of the Renaissance walled enclosure that surrounded Palma until the beginning of the 20th century. An architectural complex in which the modern building designed by the brothers Lluís and Jaume García-Ruiz, Vicente Tomás and Ángel Sánchez has been integrated. It is divided into three floors that are related to the exterior, the walls and each other through ramps, skylights and large interior balconies.</eng>
</descripcions>
<municipi>Palma</municipi>
<adreca>Plaça de la Porta de Santa Catalina, 10</adreca>
<email>museu@esbaluard.org</email>
<web>www.esbaluard.org</web>
<telefon>971908200</telefon>
<tipus>Museu</tipus>
<modalitats>Pintura,Escultura,Fotografia,Vídeo</modalitats>
<gestor>admin@esbaluard.org</gestor>
<serveis>Accés discapacitats, Cafeteria, Biblioteca</serveis>
</espai>
-->

<?php
require_once "footer.html";
?>
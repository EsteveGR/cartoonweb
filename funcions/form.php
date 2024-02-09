<?php
//funcio creació select desplegable
function creaSelectForm($valors_select){
    // Validem si hi ha resultats
    if ($valors_select->num_rows > 0) {
        // Construim cada resultat en un element <option>
        while($valor = $valors_select->fetch_assoc()) {
            echo "<option value='" . $valor["id"] . "'>" . $valor["name"] . "</option>";
        }
    } else {
        echo "<option value='cartonnist'>No hi ha dibuixants disponibles</option>";
    }
}
?>
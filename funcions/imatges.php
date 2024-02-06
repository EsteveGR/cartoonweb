
<?php
//funcio canvi de mida d'imatges fixant l'alçada
function canviMidaImatgeAlcada($imatge){
    if ($imatge != null){
        $amplada_maxima = 40;
        $ruta_imatge = "./".$imatge;
        //echo $cartoon['img'];
        //echo "<br>";
        //echo $ruta_imatge;
        //echo "<br>";
        list($amplada_original, $alcada_original) = getimagesize($ruta_imatge);
        $amplada_maxima = 40;
        //echo $amplada_maxima;
        //echo "<br>";
        //echo $amplada_original;
        $nova_alcada = ($amplada_maxima / $amplada_original) * $alcada_original;
        echo "<th><img src='".$imatge."' width='".$amplada_maxima."' height='".$nova_alcada."'></th>";
    }
    else{
        echo "<th><img src='".$imatge."'></th>";
    }
}
?>




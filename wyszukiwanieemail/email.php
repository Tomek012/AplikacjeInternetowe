<?php      // wyszukiwanie adresu emial
$wzorzec = '/[-\w.]+@([-A-z0-9]+\.)+[A-z]+/';
$tekst = "email: john@poczta.eu";
if (preg_match( $wzorzec, $tekst, $zmienna ) ) {
    echo "znaleziono email".$zmienna[0];
}else 
echo "nie znaleziono email" ;

?>

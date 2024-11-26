<?php
try {
    $client = new SoapClient("http://localhost/cukraszda/services/service.wsdl");

    // Süti adatok lekérése
    $suti = $client->getSuti();
    echo "Süti adatok: <pre>" . print_r($suti, true) . "</pre>";

    // Ár adatok lekérése
    $ar = $client->getAr();
    echo "Ár adatok: <pre>" . print_r($ar, true) . "</pre>";

    // Tartalom adatok lekérése
    $tartalom = $client->getTartalom();
    echo "Tartalom adatok: <pre>" . print_r($tartalom, true) . "</pre>";

} catch (Exception $e) {
    echo "Hiba történt: " . $e->getMessage();
}
?>

<?php
$wsdl = "http://www.mnb.hu/arfolyamok.asmx?wsdl";
try {
    $client = new SoapClient($wsdl, ['trace' => true, 'exceptions' => true]);
    $response = $client->GetCurrencies();
    echo "<pre>";
    print_r($response);
    echo "</pre>";
} catch (Exception $e) {
    echo "SOAP Kapcsolati Hiba: " . $e->getMessage();
}
?>

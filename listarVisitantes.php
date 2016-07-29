<?php
require 'lib/nusoap.php';
//WSDL location
$wsdl_url ="http://127.0.0.1:7101/Client/VisitantesPort?wsdl";
//create soap client
$client = new SoapClient($wsdl_url);
//specific service call
$result = $client->getCustomers();
//display result on browser
print_r($result);
echo '<h2>Fault (Expect - The request contains an invalid SOAP body)</h2><pre>'; print_r($result); echo '</pre>';
?>
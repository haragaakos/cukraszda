<?php
	//error_reporting(0);
	require 'SOAPService.php';
	require './WSDLDocument/WSDLDocument.php';
	$wsdl = new WSDLDocument('SOAPService', "http://localhost/cukraszda/services/SOAPService.php","http://localhost/cukraszda/services/");
	$wsdl->formatOutput = true;
	$wsdlfile = $wsdl->saveXML();
	echo $wsdlfile;
	file_put_contents ("service.wsdl" , $wsdlfile);
?>

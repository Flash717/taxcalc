<?php
require_once("ZipTaxRestHandler.php");
		
$view = "";
if(isset($_GET["view"]))
	$view = $_GET["view"];
/*
controls the RESTful services
URL mapping
*/
switch($view){

	case "all":
		// to handle REST Url /zip/list/
		$zipTaxRestHandler = new ZipTaxRestHandler();
		$zipTaxRestHandler->getAllZipTax();
		break;
		
	case "single":
		// to handle REST Url /zip/show/<id>/
		$zipTaxRestHandler = new ZipTaxRestHandler();
		$zipTaxRestHandler->getZipTax($_GET["id"]);
		break;

	case "" :
		//404 - not found;
		break;
}
?>

<?php
/* 
A domain Class to demonstrate RESTful web services
*/
Class ZipTax {
	
	private $zips = array(
		75001 => 'Addison',  
		75077 => 'Highland Village',  
		75244 => 'Dallas');
		
	/*
		you should hookup the DAO here
	*/
	public function getAllZipTax(){
		return $this->zips;
	}
	
	public function getZipTax($zip){
		
		$ziptax = array($zip => ($this->zips[$zip]) ? $this->zips[$zip] : $this->zips[1]);
		return $ziptax;
	}	
}
?>

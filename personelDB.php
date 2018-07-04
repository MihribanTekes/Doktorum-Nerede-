<?php

class PersonelDB {

	public $unvan = "";
	public $ad = "";
	public $soyad = "";
	public $bolum = "";
	public $personel_id;
	
	function __construct($unvan, $ad, $soyad, $bolum,$personel_id){
	
		$this->unvan = $unvan;
		$this->ad = $ad;
		$this->soyad = $soyad;
		$this->bolum = $bolum;
		$this->personel_id = $personel_id;
	
	}

}

?>
<?php

class Continent {

    public $nameContinent;

    public function __construct($continente){
        $this->nameContinent = $continente;
    }

}

class Country extends Continent{
    public $nameCountry;

    public function __construct($continente, $paese){
        parent::__construct($continente);
        $this->nameCountry = $paese;
    }
}

class Region extends Country{
    public $nameRegion;

    public function __construct($continente, $paese, $regione){
        parent::__construct($continente,$paese);
        $this->nameRegion = $regione;
    }
}

class Province extends Region{
    public $nameProvince;

    public function __construct($continente, $paese, $regione, $provincia){
        parent::__construct($continente,$paese,$regione);
        $this->nameProvince = $provincia;
    }
}

class City extends Province{
    public $nameCity;

    public function __construct($continente, $paese, $regione, $provincia, $citta){
        parent::__construct($continente,$paese,$regione,$provincia);
        $this->nameCity = $citta;
    }
}

class Street extends City{
    public $nameStreet;

    public function __construct($continente, $paese, $regione, $provincia, $citta, $strada){
        parent::__construct($continente,$paese,$regione,$provincia,$citta);
        $this->nameStreet = $strada;
    }

    function getMyCurrentLocation(){
        return "Mi trovo a questo indirizzo: $this->nameContinent,$this->nameCountry,$this->nameRegion, $this->nameProvince,$this->nameCity,$this->nameStreet";
    }
}

$myAdress = new Street ("Europa\n", "Italia \n","Emilia-Romagna \n","Reggio (RE) \n","Cadelbosco \n","Via Cristoforo Colombo \n");

echo $myAdress->getMyCurrentLocation();
<?php


class PoloczenieZBaza{
    private static $instance;

    private $host = "localhost";
    private $user = "root"; //uzytkownik
    private $haslo = ""; //haslo
    private $baza = "wedkarstwo"; //nazwa bazy danych

    private $poloczenie;

    public static function getInstance(){
        if(!isset(PoloczenieZBaza::$instance)){ 
            PoloczenieZBaza::$instance = new PoloczenieZBaza();
        }
        return PoloczenieZBaza::$instance; 
    }

    private function __construct(){
        $this->poloczenie = new PDO("mysql:host={$this->host};dbname={$this->baza}",$this->user,$this->haslo); //tworzenie poloczenia z baza
    }

    public function getPolaczenie(){
        return $this->poloczenie;
    }

}



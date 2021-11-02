<?php

class Movie {
    private $anno; 
    private $durata; 
    private $genere; 
    private $regista; 
    private $paeseProduzione;
    
    public function __construct($_anno,$_durata,$_genere,$_regista,$_paeseProduzione)
    {
        $this-> anno=$_anno;
        $this-> durata=$_durata;
        $this-> genere=$_genere;
        $this-> regista=$_regista;
        $this-> paeseProduzione=$_paeseProduzione;
    }

    public function getAnno() {
        return $this -> anno;
    }
    public function getDurata() {
        return $this -> durata;
    }
    public function getGenere() {
        return $this -> genere;
    }
    public function getRegista() {
        return $this -> regista;
    }
    public function getPaeseProduzione() {
        return $this -> paeseProduzione;
    }
}
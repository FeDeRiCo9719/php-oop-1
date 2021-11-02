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
}
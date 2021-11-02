<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
require_once __DIR__ . '/classes/Movie.php';

$Hellboy = new Movie(2004,"122 min","azione","Guillermo del Toro","Stati Uniti d'America");
// $Hellboy->anno = 2004;
// $Hellboy->durata = "122 min";
// $Hellboy->genere = "azione, fantascienza, fantastico, avventura";
// $Hellboy->regista = "Guillermo del Toro";
// $Hellboy->paeseProduzione = "Stati Uniti d'America";
// echo $Hellboy->anno;

$SpiderMan = new Movie(2002,"121 min","fantastico","Sam Raimi","Stati Uniti d'America");
// $SpiderMan->anno = "";
// $SpiderMan->durata = "";
// $SpiderMan->genere = "";
// $SpiderMan->regista = "";
// $SpiderMan->paeseProduzione = "";

var_dump($Hellboy,$SpiderMan);
<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
require_once __DIR__ . '/classes/Movie.php';

$Hellboy = new Movie(2004,"122 min","Azione","Guillermo del Toro","Stati Uniti d'America");
echo  "<h2>Hellboy</h2>";
echo  "<p>Anno: {$Hellboy->getAnno()}</p>";
echo  "<p>Durata: {$Hellboy->getDurata()}</p>";
echo  "<p>genere: {$Hellboy->getGenere()}</p>";
echo  "<p>regista: {$Hellboy->getRegista()}</p>";
echo  "<p>paeseProduzione: {$Hellboy->getPaeseProduzione()}</p>";


$SpiderMan = new Movie(2002,"121 min","Fantastico","Sam Raimi","Stati Uniti d'America");
echo  "<h2>SpiderMan</h2>";
echo  "<p>Anno: {$SpiderMan->getAnno()}</p>";
echo  "<p>Durata: {$SpiderMan->getDurata()}</p>";
echo  "<p>genere: {$SpiderMan->getGenere()}</p>";
echo  "<p>regista: {$SpiderMan->getRegista()}</p>";
echo  "<p>paeseProduzione: {$SpiderMan->getPaeseProduzione()}</p>";

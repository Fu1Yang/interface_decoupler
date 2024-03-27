<?php

require_once ("livre_class.php");


$livre1 = new Livre("Étranger",1942, "978-2-07-036002-4", " L'Étranger est un roman emblématique de la littérature française du XXe siècle.");
$livre2 = new Livre("Harry Potter à l'école des sorciers",1997, "978-2-07-058462-5", " Accompagné de ses amis Ron et Hermione, Harry découvre un monde magique fascinant tout en affrontant les forces du mal incarnées par le redoutable Voldemort.");
$livre3 = new Livre("1984",1949, "978-2-07-036822-8", " 1984 présente un monde dystopique où le gouvernement totalitaire surveille et contrôle chaque aspect de la vie des citoyens.");
$livre4 = new Livre("Le Petit Prince",1943, "978-2-07-061275-5", " Le Petit Prince est un conte poétique et philosophique qui narre les aventures d'un jeune prince venu d'une autre planète. ");


echo $livre1->getTitre();
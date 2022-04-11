<?php

/* Exercice 1 */
// Créer une variable avec le chiffre 12 
$var = 12;
// Lui ajouter 9 via l'opérateur arithmétique correspondant
$var += 9;
// Afficher la variable avec l'opération effectuée
// var_dump($var);

/* Exercice 2 */
// Prenons l'exemple d'une somme d'argent de 450 euros, composée en billets de 5, 10, et 20 euros
$somme = 450;
define("billet20", 20);
define("billet10", 10);
define("billet5", 5);
// Nous savons que nous possédons 6 billets de 20 euros et 52 billets de 5 euros, combien reste t'il de billets de 10 euros ?
// Poser les opérations nécessaires au calcul ci-dessous
$argentRestant = $somme - (6 * billet20) - (52 * billet5);
$nbBilletsDe10 = $argentRestant / billet10;
// var_dump($nbBilletsDe10);


/* Exercice 3*/
// La rentrée des classes approche et les élèves de 6e sont au nombre de 155, il faut tous les placer dans des classes de 30 maximum
$eleves = 155;
define("NB_ELEVES_PAR_CLASSSE", 30);
// Combien de classes aurons nous au final ? Développer ci-dessous
$nbClasses = ceil($eleves / NB_ELEVES_PAR_CLASSSE); // Arrondi supérieur
// Combien restera t'il d'enfants dans la dernière classe à être composée ? Développer ci-dessous
$nbRestants = $eleves % NB_ELEVES_PAR_CLASSSE; // Eleves restants si classes de 30
var_dump($nbRestants); // Output : 5

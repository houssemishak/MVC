<?php
class Routeur {
protected $oRequetesSQL; // objet RequetesSQL utilisé par tous les contrôleurs 
 const BASE_URI = '/31B/'; // dossier racine du site par rapport au dossier racine d'Apache
/**
* Constructeur qui valide l'URI,
 * instancie un contrôleur et exécute une méthode de ce contrôleur,
 * chaque URI valide est associé à un contrôleur et une méthode de ce contrôleur
 */
public function __construct() {
try {
$uri = $_SERVER['REQUEST_URI'];
 // Analyser $uri
 // si par exemple $uri contient /31B/livre?livre_id=2
 // alors instancier le contrôleur Frontend et exécuter sa méthode voirLivre()
 // si $uri n'a pas de contrôleur et de méthode associés
 // alors lancer une exception avec l'erreur HTTP 404 "Page non trouvée" 
 }
catch (Error | Exception $e) {
// Afficher une vue d'erreur
}
}
}
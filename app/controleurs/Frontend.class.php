<?php
class Frontend extends Routeur {
    private $livre_id;
    /**
    * Constructeur qui initialise le contexte du contrôleur 
    */ 
    public function __construct() {
    $this->livre_id = $_GET['livre_id'] ?? null; 
    $this->oRequetesSQL = new RequetesSQL;
    }
    /**
    * Lister les livres
    */ 
    public function listerLivres() {
    $livres = $this->oRequetesSQL->getLivres();
    new Vue('vListeLivres',
    ['titre' => 'Livres', 'livres' => $livres],
    'gabarit-frontend');
    }
}    
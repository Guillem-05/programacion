<?php
require_once 'Publicacion.php';

class Revista extends Publicacion {
    private $tematica;

    public function __construct($titulo, $autor, $anio, $tematica) {
        parent::__construct($titulo, $autor, $anio);
        $this->tematica = $tematica;
    }

    public function getTematica() {
        return $this->tematica;
    }

    public function setTematica($tematica) {
        $this->tematica = $tematica;
    }
}
?>
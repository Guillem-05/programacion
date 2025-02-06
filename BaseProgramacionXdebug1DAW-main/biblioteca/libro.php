<?php
require_once 'Publicacion.php';

class Libro extends Publicacion {
    private $numeroPaginas;

    public function __construct($titulo, $autor, $anio, $numeroPaginas) {
        parent::__construct($titulo, $autor, $anio);
        $this->numeroPaginas = $numeroPaginas;
    }

    public function getNumeroPaginas() {
        return $this->numeroPaginas;
    }

    public function setNumeroPaginas($numeroPaginas) {
        $this->numeroPaginas = $numeroPaginas;
    }
}
?>
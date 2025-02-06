<?php
require_once 'Libro.php';
require_once 'Revista.php';

class PublicacionManager {
    private $publicaciones = [];

    public function __construct() {
        $this->loadData();
    }

    public function addPublicacion($publicacion) {
        $this->publicaciones[] = $publicacion;
        $this->saveData();
    }

    public function getPublicaciones() {
        return $this->publicaciones;
    }

    public function updatePublicacion($index, $publicacion) {
        if (isset($this->publicaciones[$index])) {
            $this->publicaciones[$index] = $publicacion;
            $this->saveData();
        }
    }

    public function deletePublicacion($index) {
        if (isset($this->publicaciones[$index])) {
            unset($this->publicaciones[$index]);
            $this->publicaciones = array_values($this->publicaciones); 
            $this->saveData();
        }
    }

    private function saveData() {
        file_put_contents('data.json', json_encode($this->publicaciones));
    }

    private function loadData() {
        if (file_exists('data.json')) {
            $data = json_decode(file_get_contents('data.json'), true);
            foreach ($data as $item) {
                if (isset($item['numeroPaginas'])) {
                    $this->publicaciones[] = new Libro($item['titulo'], $item['autor'], $item['anio'], $item['numeroPaginas']);
                } else {
                    $this->publicaciones[] = new Revista($item['titulo'], $item['autor'], $item['anio'], $item['tematica']);
                }
            }
        }
    }
}
?>
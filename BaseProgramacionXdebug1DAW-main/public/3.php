<?php

// -----------------------------------------
// Ejercicio 1: Instrumentos Musicales
// -----------------------------------------

abstract class Instrumento {
    protected $musicoAsociado;
    protected $cantidadNotas;

    public function __construct($musicoAsociado, $cantidadNotas) {
        $this->musicoAsociado = $musicoAsociado;
        $this->cantidadNotas = $cantidadNotas;
    }

    public function tocar() {
        return "{$this->musicoAsociado} está tocando este instrumento.";
    }
}

// Clases específicas ya implementadas anteriormente (ver Ejercicio 1)

// -----------------------------------------
// Ejercicio 2: Jerarquía de herencia (basada en UML)
// -----------------------------------------

class Vehiculo {
    protected $marca;
    protected $modelo;
    protected $anio;

    public function __construct($marca, $modelo, $anio) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio;
    }

    public function acelerar() {
        return "El vehículo {$this->marca} {$this->modelo} está acelerando.";
    }

    public function frenar() {
        return "El vehículo {$this->marca} {$this->modelo} está frenando.";
    }
}

class Automovil extends Vehiculo {
    private $tipoCombustible;
    private $numPuertas;

    public function __construct($marca, $modelo, $anio, $tipoCombustible, $numPuertas) {
        parent::__construct($marca, $modelo, $anio);
        $this->tipoCombustible = $tipoCombustible;
        $this->numPuertas = $numPuertas;
    }

    public function getDescripcion() {
        return "{$this->marca} {$this->modelo}, {$this->anio} - {$this->tipoCombustible}, {$this->numPuertas} puertas.";
    }
}

class Motocicleta extends Vehiculo {
    private $cilindrada;
    private $tipoMotocicleta;

    public function __construct($marca, $modelo, $anio, $cilindrada, $tipoMotocicleta) {
        parent::__construct($marca, $modelo, $anio);
        $this->cilindrada = $cilindrada;
        $this->tipoMotocicleta = $tipoMotocicleta;
    }

    public function getDescripcion() {
        return "{$this->marca} {$this->modelo}, {$this->anio} - {$this->cilindrada} cc, {$this->tipoMotocicleta}.";
    }
}

// Pruebas para el Ejercicio 2
echo "=== Ejercicio 2 ===\n";
$auto = new Automovil("Toyota", "Corolla", 2022, "Gasolina", 4);
echo $auto->getDescripcion() . "\n";

$moto = new Motocicleta("Kawasaki", "Ninja", 2023, 650, "Deportiva");
echo $moto->getDescripcion() . "\n";

// -----------------------------------------
// Ejercicio 3: Sistema de Dibujo
// -----------------------------------------

abstract class Figura {
    protected $x;
    protected $y;
    protected $color;

    public function __construct($x, $y, $color) {
        $this->x = $x;
        $this->y = $y;
        $this->color = $color;
    }

    abstract public function calcularArea();

    public function mover($nuevoX, $nuevoY) {
        $this->x = $nuevoX;
        $this->y = $nuevoY;
    }

    public function getDetalles() {
        return "Ubicación: ({$this->x}, {$this->y}), Color: {$this->color}";
    }
}

class Triangulo extends Figura {
    private $base;
    private $altura;

    public function __construct($x, $y, $color, $base, $altura) {
        parent::__construct($x, $y, $color);
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }
}

class Rectangulo extends Figura {
    private $ancho;
    private $alto;

    public function __construct($x, $y, $color, $ancho, $alto) {
        parent::__construct($x, $y, $color);
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    public function calcularArea() {
        return $this->ancho * $this->alto;
    }
}

class Circulo extends Figura {
    private $radio;

    public function __construct($x, $y, $color, $radio) {
        parent::__construct($x, $y, $color);
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }
}

// Pruebas para el Ejercicio 3
echo "=== Ejercicio 3 ===\n";
$triangulo = new Triangulo(0, 0, "Rojo", 10, 5);
echo $triangulo->getDetalles() . ", Área: " . $triangulo->calcularArea() . "\n";

$rectangulo = new Rectangulo(5, 5, "Azul", 10, 20);
echo $rectangulo->getDetalles() . ", Área: " . $rectangulo->calcularArea() . "\n";

$circulo = new Circulo(2, 2, "Verde", 7);
echo $circulo->getDetalles() . ", Área: " . $circulo->calcularArea() . "\n";

// -----------------------------------------
// Ejercicio 4: Gestión de Biblioteca
// -----------------------------------------

class Obra {
    protected $titulo;
    protected $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function visualizar() {
        return "Título: {$this->titulo}, Autor: {$this->autor}";
    }
}

class Volumen extends Obra {
    private $numPaginas;

    public function __construct($titulo, $autor, $numPaginas) {
        parent::__construct($titulo, $autor);
        $this->numPaginas = $numPaginas;
    }

    public function visualizar() {
        return parent::visualizar() . ", Páginas: {$this->numPaginas}";
    }
}

class Revista extends Obra {
    private $numeroEdicion;

    public function __construct($titulo, $autor, $numeroEdicion) {
        parent::__construct($titulo, $autor);
        $this->numeroEdicion = $numeroEdicion;
    }

    public function visualizar() {
        return parent::visualizar() . ", Edición: {$this->numeroEdicion}";
    }
}

// Pruebas para el Ejercicio 4
echo "=== Ejercicio 4 ===\n";
$obra = new Obra("Don Quijote", "Miguel de Cervantes");
echo $obra->visualizar() . "\n";

$volumen = new Volumen("El Señor de los Anillos", "J.R.R. Tolkien", 1200);
echo $volumen->visualizar() . "\n";

$revista = new Revista("National Geographic", "Varios", 345);
echo $revista->visualizar() . "\n";

?>

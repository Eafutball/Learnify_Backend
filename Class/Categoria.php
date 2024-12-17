<?php
class Categoria {
    // Propiedades de la clase
    private $id;
    private $nombre;
    private $descripcion;

    // Constructor para inicializar los valores
    public function __construct($nombre, $descripcion = '') {
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    // Métodos getters y setters para acceder a las propiedades
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
}
?>

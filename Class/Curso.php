
<?php
class Curso {
    // Propiedades de la clase
    private $id;
    private $titulo;
    private $descripcion;
    private Categoria $categoria;
    private Instructor $instructor;
    private $precio;
    private Nivel $nivel;
    private Estado $estado;
    private $fecha_creacion;

    // Constructor para inicializar los valores
    public function __construct($titulo, $descripcion, Categoria $categoria, Instructor $instructor, $precio = 0.00, Nivel $nivel = Nivel::PRINCIPIANTE, Estado $estado = Estado::PENDIENTE) {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;
        $this->instructor = $instructor;
        $this->precio = $precio;
        $this->nivel = $nivel;
        $this->estado = $estado;
        $this->fecha_creacion = date('Y-m-d H:i:s');
    }

    // Getters y Setters para las propiedades

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getCategoria(): Categoria {
        return $this->categoria;
    }

    public function setCategoria(Categoria $categoria): void {
        $this->categoria = $categoria;
    }

    public function getInstructor(): Instructor {
        return $this->instructor;
    }

    public function setInstructor(Instructor $instructor): void {
        $this->instructor = $instructor;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio): void {
        $this->precio = $precio;
    }

    public function getNivel(): Nivel {
        return $this->nivel;
    }

    public function setNivel(Nivel $nivel): void {
        $this->nivel = $nivel;
    }

    public function getEstado(): Estado {
        return $this->estado;
    }

    public function setEstado(Estado $estado): void {
        $this->estado = $estado;
    }

    public function getFechaCreacion() {
        return $this->fecha_creacion;
    }

    public function setFechaCreacion($fecha_creacion): void {
        $this->fecha_creacion = $fecha_creacion;
    }

    // Método para obtener la información del curso como un array
    public function getInformation() {
        return [
            'id' => $this->getId(),
            'titulo' => $this->getTitulo(),
            'descripcion' => $this->getDescripcion(),
            'categoria' => $this->getCategoria()->getNombre(),
            'instructor' => $this->getInstructor()->getNombre(),
            'precio' => $this->getPrecio(),
            'nivel' => $this->getNivel()->value, // Obtener valor del enum
            'estado' => $this->getEstado()->value, // Obtener valor del enum
            'fecha_creacion' => $this->getFechaCreacion()
        ];
    }
}
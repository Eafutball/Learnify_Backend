<?php
// Clase base Usuarios
abstract class Usuarios {
    private string $nombre;
    private string $correo;
    private string $password;
    private Roles $roles;
    private DateTime $FechaCreacion;

    public function __construct(string $nombre, string $correo, string $password, Roles $roles) {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->roles = $roles;
        $this->FechaCreacion = new DateTime();
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getCorreo(): string {
        return $this->correo;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function getRoles(): Roles {
        return $this->roles;
    }

    public function getFechaCreacion(): DateTime {
        return $this->FechaCreacion;
    }

    public abstract function getInformacion(): object;
}

// Clase Estudiante que extiende Usuarios
class Estudiante extends Usuarios {
    private Curso $curso;

    public function __construct(string $nombre, string $correo, string $password, Roles $roles, string $curso) {
        parent::__construct($nombre, $correo, $password, $roles);
        $this->curso = $curso;
    }

    public function getCurso(): Curso {
        return $this->curso;
    }

    public function getInformacion(): object {
        return (object)[
            'nombre' => $this->getNombre(),
            'correo' => $this->getCorreo(),
            'roles' => $this->getRoles()->value, // Usamos ->value para obtener el valor del enum
            'fechaCreacion' => $this->getFechaCreacion()->format('Y-m-d H:i:s'),
            'curso' => $this->getCurso()->getInformation()
        ];
    }
}




class Instructor extends Usuarios {

    public function __construct(string $nombre, string $correo, string $password, Roles $roles) {
        parent::__construct($nombre, $correo, $password, $roles);
    }


    public function getInformacion(): object {
        return (object)[
            'nombre' => $this->getNombre(),
            'correo' => $this->getCorreo(),
            'roles' => $this->getRoles()->value, // Usamos ->value para obtener el valor del enum
            'fechaCreacion' => $this->getFechaCreacion()->format('Y-m-d H:i:s'),
        ];
    }
}


class Administrador extends Usuarios {

    public function __construct(string $nombre, string $correo, string $password, Roles $roles) {
        parent::__construct($nombre, $correo, $password, $roles);
    }

    public function getInformacion(): object {
        return (object)[
            'nombre' => $this->getNombre(),
            'correo' => $this->getCorreo(),
            'roles' => $this->getRoles()->value, // Usamos ->value para obtener el valor del enum
            'fechaCreacion' => $this->getFechaCreacion()->format('Y-m-d H:i:s'),
        ];
    }
}
?>

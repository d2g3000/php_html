<?php
namespace App\Classes;
use App\Traits\Acciones;

class Usuario {

    use Acciones;
    protected $nombre;
    protected $apellido;
    protected $edad;

    function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getName() {
        return $this->nombre;
    }

    public function getDate_adopted() {
        return $this->apellido;
    }

    public function getAdopted_by() {
        return $this->edad;
    }
}
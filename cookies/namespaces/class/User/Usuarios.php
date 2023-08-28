<?php

namespace User;

class User {

    protected $name;
    protected $apellido;
    protected $edad;

    function __construct($name, $apellido, $edad) {
        $this->name = $name;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getName() {
        return $this->name;
    }

    public function getDate_adopted() {
        return $this->apellido;
    }

    public function getAdopted_by() {
        return $this->edad;
    }
}
<?php 
require("vendor/autoload.php");
//instalar composer require symfony/var-dumper
class user {
    protected $nombre ;
    protected $edad;
    function __construct(string $nombre,int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
}
$danny = new user("danny",43);

dd($danny);
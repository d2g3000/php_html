<?php
$page = $_GET["page"] ?? null;

switch ($page) {

    case 'contacto':
        require("src/pages/contacto/index.php");
        break;

    case 'servicios':
        require("src/pages/servicios/index.php");
        break;
    
    default:
        require("indexviejo.php");
        break;

}
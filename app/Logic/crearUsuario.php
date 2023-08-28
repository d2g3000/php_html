<?php

use App\Classes\Usuario;

function crearUsuario(){
    $user1 = new Usuario('Danny','Gonzalez',43);
   echo $user1->play();
}


?>
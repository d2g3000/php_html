<?php

require("vendor/autoload.php");

crearUsuario();

    $array_prueba 
    = array(
        array(
            "id"=>1,
            "nombre"=>"Danny"
        ),
        array(
            "id"=>2,
            "nombre"=>"Diego"
        ),
        array(
            "id"=>3,
            "nombre"=>"Luis"
        ),
    );
/*
$GLOBLAS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV
traits es herencia

composer init para crear el archivo
composer du para recrearlo
*/
/*
$page = $_GET["page"] ?? null;

switch ($page) {

    case 'contact':
        require("pages/contact.php");
        break;

    case 'services':
        require("pages/services.php");
        break;
    
    default:
        require("index.php");
        break;

}*/
 /*
 modificar el httpd-vhosts.conf pARA MOSTRAR EL SERVICIO

 C:\Windows\System32\drivers\etc\hosts   modificar
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
   <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded text-center fs-1 "> Prueba de php</div>
   <div class="mb-3 shadow-lg p-3 mb-5">
   <form action="server.php" method="post" enctype="multipart/form-data">
        <label for="nombre" class="form-label">Nombre</label>
        <input class="form-control" type="text" name="nombre">
        <label for="edad" class="form-label">edad</label>
        <input class="form-control" type="text" name="edad">
        <label for="image" class="form-label">image</label>
        <input class="form-control" type="file" name="image">

    <button class="btn btn-primary" type="submit">enviar</button>
    </form>
   </div>
  
    <div id="div1"></div>

    <?php for($i=1;$i<10;$i++): ?>
            <p><?= $i * 9 ?></p>
    <?php endfor; ?>
    </div>
    <div>
    <a class="btn btn-primary"href="match/index.php">match</a>
  
    </div>
   
    <script>

        const formData =new FormData();

        formData.append('nombre','mr.michi');
        formData.append('edad','14');
        fetch("server.php",
        {
            body:formData,
            method:"POST"
        })
        .then(res=>res.text())
        .then(data=>{
            console.log(data)
        })

        let users= JSON.parse('<?= json_encode($array_prueba) ?>');
      
      users.forEach(users =>{
        addElement(users);

      } )

function addElement (data) {
  // crea un nuevo div
  // y añade contenido
  var newDiv = document.createElement("div");
  var newContent = document.createTextNode(` ${data['id']} ${data['nombre']}`);
  newDiv.appendChild(newContent); //añade texto al div creado.

  // añade el elemento creado y su contenido al DOM
  var currentDiv = document.getElementById("div1");
  document.body.insertBefore(newDiv, currentDiv);
}
       
    </script>
</body>
</html>
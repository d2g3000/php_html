<?php
/**
 * Esta funcion es para sumar
 * 
 * @param int $a_a 
 * @param int $b_b
 * @return int
 *  */ 
function sumr(int $a_a,int $b_b){
    return $a_a+$b_b;
}


/*
var client = new HttpClient();var request = new HttpRequestMessage(HttpMethod.Post, "https://fepatest-api.webposonline.com/api/fepa/ak/v1/test/sendXmlFileToProcess/WXTRLEPB/ccdf2355-a292-4695-8233-b7dcb2e219b2");
request.Content = new StreamContent(File.OpenRead("F6yAjtVjy/XML prueba.xml"));var response = await client.SendAsync(request);
response.EnsureSuccessStatusCode();Console.WriteLine(await response.Content.ReadAsStringAsync());*/
/*
$htmlentities = htmlentities($name);
$addslashes = addslashes($username);
$onlywords = preg_replace("/\d/", "", $username);
$onlynumbers = preg_replace("/\D/", "", $username);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitize_int = filter_var($age, FILTER_SANITIZE_NUMBER_INT);


function validate($name, $email, $subject, $message, $form) {
    return !empty(trim($name)) && !empty(trim($email)) && !empty(trim($subject)) && !empty(trim($message));
}

$status = "";

if ( isset($_POST["form"]) ) {

    if ( validate(...$_POST) ) {
        
        $name = strip_tags($_POST["name"]);
        $email = strip_tags($_POST["email"]);
        $subject = strip_tags($_POST["subject"]);
        $message = strip_tags($_POST["message"]);

        // Mandar el correo

        $status = "success";

    }
    else {
        $status = "danger";
    }
   
}
*/

echo "<pre>";

$edad = $_POST["edad"];
$nombre = $_POST["nombre"];
$is_numero =is_numeric($edad);
if (!$is_numero) {
   $nuevaURL = 'http://localhost:8000';
    header('Location: '. $nuevaURL);
}
if (isset($_POST["nombre"])&& !empty($nombre)) {
   echo "hola $nombre";
}
else{
    echo "La variable esta vacia";
}
var_dump($_FILES);
echo " el nombre es $nombre y la edad es $edad";
echo "</pre>";
$basename = $_FILES["image"]["name"];//nombre de la imagen
$image = $_FILES["image"]["tmp_name"];//imagen en el temporal
$ruta="images/$basename";// A DONDE SE VA A COPIAR

move_uploaded_file($image,$ruta);//guardado de la imagen
echo $basename;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<figure class="figure">
    <img src="<?=$ruta ?>" alt="<?= $basename ?>" class="figure-img img-fluid rounded">
    </figure>
    <div>
    <a class="btn btn-primary"href="index.php">volver</a>
    </div>
   
</body>
</html>
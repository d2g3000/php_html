<?php
require('date.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   date_default_timezone_set("America/Caracas");
    $date=date_create();
    echo date_format($date,"d-m-y");

    echo '<br>';
    $intervalo=DateInterval::createFromDateString("5 days");
    $fecha=new DateTime();
    $fecha->add($intervalo);
    echo $fecha->format('d-M-Y');
    echo '<br>';
     echo strtotime("11 march 2020");
     $hoy =new DateTime();
     $fechadenacimientodiego = new DateTime("20 march 2020");
     $diferenciadetiempo = $fechadenacimientodiego->diff($hoy);
     echo '<br>';
     echo $diferenciadetiempo->format("%d %m %Y");
     echo '<br>';
     $fecha = new DateTime();
     $fecha->modify("+1 day +2 months");
     echo $fecha->format('d-m-y');
     echo '<br>';
     echo get_date_from_timestamp("2022-04-04");
    ?>
   
</body>
</html>
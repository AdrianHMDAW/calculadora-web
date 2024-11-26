<<<<<<< HEAD
<<<<<<< HEAD
<?php$num1 = $_POST["num1"];$num2 = $_POST["num2"];$operation = $_POST["operation"];switch ($operation) {
case "suma":
echo "Resultado: " . ($num1 + $num2);
break;
case "resta":
echo "Resultado: " . ($num1 - $num2);
break;
case "multiplicacion":
echo "Resultado: " . ($num1 * $num2);
break;
case "division":
echo "Resultado: " . ($num1 / $num2);
break;
}?>
=======
<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operation = $_POST["operation"];
switch ($operation) {
    case "suma":
        echo "Resultado: " . ($num1 + $num2);
        break;
        case "resta":
        echo "Resultado: " . ($num1 - $num2);
        break;
}
?>
>>>>>>> funcionalidad/suma-resta
=======
<?php$num1 = $_POST["num1"];$num2 = $_POST["num2"];$operation = $_POST["operation"];switch ($operation) {
    case "multiplicacion":
        echo "Resultado: " . ($num1 * $num2);
        DAW | Despliegue de aplicaciones web
        break;
        case "division":
        echo "Resultado: " . ($num1 / $num2);
        break;
}?>
>>>>>>> funcionalidad/multiplicacion-division

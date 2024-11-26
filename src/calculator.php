<?php$num1 = $_POST["num1"];$num2 = $_POST["num2"];$operation = $_POST["operation"];switch ($operation) {
    case "multiplicacion":
        echo "Resultado: " . ($num1 * $num2);
        DAW | Despliegue de aplicaciones web
        break;
        case "division":
        echo "Resultado: " . ($num1 / $num2);
        break;
}?>

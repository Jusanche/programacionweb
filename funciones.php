<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$op = $_POST["op"];


if($op == "+"){
$resultado = $n1 + $n2;
}
else if($op == "-"){
$resultado = $n1 - $n2;
}
else if($op == "*"){
$resultado = $n1 * $n2;
}
else if ($op == "/"){
$resultado = $n1 / $n2;
}

else {
	$resultado = pow($n1,$n2);
}


echo "el resultado es:" . $resultado;


?>
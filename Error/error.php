<?php 
$destinatario = "a01275825@tec.mx"; 
$cuerpo = "Se detectó que hay un ataque";
mail($destinatario,"Intento de Ataque",$cuerpo);
header("Location: funciona.html")
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>CONTROL DE CLIENTES</title>
<link href="estilo_principal.css" rel="stylesheet">
</head>
<body>
    <div class="container">
<header>
<?php
session_start();
require 'encabezado.php';
echo "<p id='centrado'>";
echo 'Bienvenido > '.$_SESSION['admin'].'<br>';
echo "|<a href='cerrar.php'> Cerrar Sesion </a>|";
echo '</p>';
?>
</header>
<section>
<table border="1" width="550" cellspacing="5">
<tr>
<td><a href="#">
<img src="registro.png"
width="60" height="60" /></a>
</td>
<td><a href="#">Registro de clientes</a></td>
</tr>
<tr>
<td><a href="#">
<img src="listado.jpg"
width="60" height="60" /></a>
</td>
<td><a href="#">Listado de Clientes</a></td>
</tr>
<tr>
<td><a href="javascript:close()">
<img src="salir.png"
width="60" height="60" /></a>
</td>
<td><a href="javascript:close()">Salir</a></td>
</tr>
</table>
</section>
<footer>
<?php require 'pie.php'; ?>
</footer>
</body>
</html>
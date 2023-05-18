<?php
require_once("../Database/Database.php");
$resultado0 = Database::getAllUsuarios();
$resultado1 = Database::getAllProductos();
$resultado2 = Database::getAllUsuariosProductos();
$resultado3 = Database::getAllRol();
$resultado4 = Database::getAllJugadores();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon"
        href="../../Imagenes/emblema.png">
    <title>ADMIN</title>
    <link rel="stylesheet" href="../../css/admin.css">
</head>
<body>
    <div class="titulo1">
         <p id="titulo2">TABLAS</p>
    </div>
    <div class="botonesdiv">
        <p id="botonusuario" onclick="user()">Usuarios</p>
        <p id="botonproducto" onclick="product()">Productos</p>
        <p id="botonusuarioproducto" onclick="userproduct()">Usuarios_has_productos</p>
        <p id="botonrol" onclick="rol()">Rol</p>
        <p id="botonjugadores" onclick="jugadores()">Jugadores</p>
    </div>
    <div class="usuariosdiv">
    <p class="encabezado">USUARIOS</p>
    <table class="container">
        <thead>
            <tr>
                <th><h1>ID</h1></th>
                <th><h1>Nombre</h1></th>
                <th><h1>Apellido</h1></th>
                <th><h1>Numero</h1></th>
                <th><h1>Direccion</h1></th>
                <th><h1>Edad</h1></th>
                <th><h1>Correo electrónico</h1></th>
                <th><h1>id_Rol</h1></th>
            </tr>
        </thead>
        <tbody>
        <?php 
  foreach ($resultado0 as $fila) {
    echo "<tr>";
    echo "<td>" . $fila["id"] . "</td>";
    echo "<td>" . $fila["nombre"] . "</td>";
    echo "<td>" . $fila["apellido"] . "</td>";
    echo "<td>" . $fila["numero"] . "</td>";
    echo "<td>" . $fila["direccion"] . "</td>";
    echo "<td>" . $fila["edad"] . "</td>";
    echo "<td>" . $fila["correo_electronico"] . "</td>";
    echo "<td>" . $fila["id_rol"] . "</td>";
    echo "</tr>";
  }
  
     ?>
        </tbody>
    </table>
    </div>
    <div class="productosdiv">
    <p class="encabezado">PRODUCTOS</p>
    <a href='createProducto.php' class="botonesphp" id="botonarriba">PRODUCTO NUEVO</a>
    <table class="container">
        <thead>
            <tr>
                <th><h1>ID</h1></th>
                <th><h1>Nombre</h1></th>
                <th><h1>Precio</h1></th>
                <th><h1>Stock</h1></th>
                <th><h1>Acciones</h1></th>
        </thead>
        <tbody>
        <?php 
  foreach ($resultado1 as $fila) {
    echo "<tr>";
    echo "<td>" . $fila["id"] . "</td>";
    echo "<td>" . $fila["nombre"] . "</td>";
    echo "<td>" . $fila["precio"] . "</td>";
    echo "<td>" . $fila["stock"] . "</td>";
    echo "<td> <a class='botonesphp' href='../Productos/editProducto.php?id=" . $fila['id'] . " '>Editar</a><a class='botonesphp' href='../Productos/delete.php?id=" . $fila['id'] . "'>Eliminar</a>
                    </td>";
    echo "</tr>";
  }
  
     ?>
        </tbody>
    </table>
    </div>
    <div class="usuarios_has_productosdiv">
    <p class="encabezado">Pedidos</p>
    <table class="container">
        <thead>
            <tr>
                <th><h1>ID</h1></th>
                <th><h1>IDProducto</h1></th>
                <th><h1>IDUsuario</h1></th>
                <th><h1>Cantidad</h1></th>
                <th><h1>Fecha de pedido</h1></th>
            </tr>
        </thead>
        <tbody>
        <?php 
  foreach ($resultado2 as $fila) {
    echo "<tr>";
    echo "<td>" . $fila["id"] . "</td>";
    echo "<td>" . $fila["id_producto"] . "</td>";
    echo "<td>" . $fila["id_usuario"] . "</td>";
    echo "<td>" . $fila["cantidad"] . "</td>";
    echo "<td>" . $fila["fecha_pedido"] . "</td>";
    echo "</tr>";
  }
  
     ?>
        </tbody>
    </table>
    </div>
    <div class="roldiv">
    <p class="encabezado">ROL</p>
    <table class="container">
        <thead>
            <tr>
                <th><h1>ID</h1></th>
                <th><h1>Nombre Rol</h1></th>
            </tr>
        </thead>
        <tbody>
        <?php 
  foreach ($resultado3 as $fila) {
    echo "<tr>";
    echo "<td>" . $fila["id"] . "</td>";
    echo "<td>" . $fila["nombre"] . "</td>";
    echo "</tr>";
  }
     ?>
        </tbody>
    </table>
</div>
<div class="jugadoresdiv">
    <p class="encabezado">JUGADORES</p>
    <table class="container">
        <thead>
            <tr>
                <th><h1>ID</h1></th>
                <th><h1>Nombre</h1></th>
                <th><h1>Apellido</h1></th>
                <th><h1>Dorsal</h1></th>
                <th><h1>Posicion</h1></th>
            </tr>
        </thead>
        <tbody>
        <?php 
  foreach ($resultado4 as $fila) {
    echo "<tr>";
    echo "<td>" . $fila["id"] . "</td>";
    echo "<td>" . $fila["nombre"] . "</td>";
    echo "<td>" . $fila["apellido"] . "</td>";
    echo "<td>" . $fila["dorsal"] . "</td>";
    echo "<td>" . $fila["posicion"] . "</td>";
    echo "</tr>";
  }
  
     ?>
        </tbody>
    </table>
    </div>
</body>
<script src="../../js/admin.js"></script>
</html>
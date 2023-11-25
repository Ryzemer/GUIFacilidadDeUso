<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $dbname = "Kadmiel";
    
    $enlace = mysqli_connect($servidor, $usuario, $password, $dbname);

?>


<?php

// Conecta a la base de datos
$enlace = mysqli_connect($servidor, $usuario, $password, $dbname);

// Obtiene los datos del formulario
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$direccion = $_POST['direccion'];
$distrito = $_POST['distrito'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

// Crea la consulta SQL
$consulta = "INSERT INTO clientes (dni, nombre, apellidoPaterno, apellidoMaterno, fechaNacimiento, direccion, distrito, telefono, email)
VALUES ('$dni', '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$fechaNacimiento', '$direccion', '$distrito', '$telefono', '$email')";

// Ejecuta la consulta
$resultado = mysqli_query($enlace, $consulta);

// Verifica si la consulta se realizó correctamente
if ($resultado) {
  // La consulta se realizó correctamente
  echo "Los datos se registraron correctamente.";
} else {
  // La consulta no se realizó correctamente
  echo "Ocurrió un error al registrar los datos.";
}

// Cierra la conexión a la base de datos
mysqli_close($enlace);

?>

<?php

// Conecta a la base de datos
$enlace = mysqli_connect($servidor, $usuario, $password, $dbname);

// Obtiene los datos del formulario
$codigoProducto = $_POST['codigoProducto'];
$precioPropuesto = $_POST['precioPropuesto'];
$stock = $_POST['stock'];
$disponibilidad = $_POST['disponibilidad'];

// Crea la consulta SQL
$consulta = "INSERT INTO productos (codigoProducto, precioPropuesto, stock, disponibilidad)
VALUES ('$codigoProducto', '$precioPropuesto', '$stock', '$disponibilidad')";

// Ejecuta la consulta
$resultado = mysqli_query($enlace, $consulta);

// Verifica si la consulta se realizó correctamente
if ($resultado) {
  // La consulta se realizó correctamente
  echo "Los datos se registraron correctamente.";
} else {
  // La consulta no se realizó correctamente
  echo "Ocurrió un error al registrar los datos.";
}

// Cierra la conexión a la base de datos
mysqli_close($enlace);

?>

<?php

// Conecta a la base de datos
$enlace = mysqli_connect($servidor, $usuario, $password, $dbname);

// Obtiene los datos del formulario
$idProducto = $_POST['IDProd'];
$cantidad = $_POST['cantidad'];
$montoFacturado = $_POST['montoFacturado'];
$fechaVenta = $_POST['fechaVenta'];

// Crea la consulta SQL
$consulta = "INSERT INTO ventas (idProducto, cantidad, montoFacturado, fechaVenta)
VALUES ('$idProducto', '$cantidad', '$montoFacturado', '$fechaVenta')";

// Ejecuta la consulta
$resultado = mysqli_query($enlace, $consulta);

// Verifica si la consulta se realizó correctamente
if ($resultado) {
  // La consulta se realizó correctamente
  echo "Los datos se registraron correctamente.";
} else {
  // La consulta no se realizó correctamente
  echo "Ocurrió un error al registrar los datos.";
}

// Cierra la conexión a la base de datos
mysqli_close($enlace);

?>


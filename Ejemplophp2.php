<!DOCTYPE html>
<html lang="es">
<head>
	<title>PHP</title>

</head>

<body>
   <?php
  $dia = date("d");
  if ($dia <= 10) {
    echo "sitio activo";
  } else {
    echo "sitio fuera de servicio";
  }
  ?>

</body>
</html>
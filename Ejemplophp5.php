<!DOCTYPE html>
<html lang="es">
<head>
	<title>PHP</title>

</head>

<body>
  <?php
  for ($f = 1; $f <= 100; $f++) {
    echo $f;
    echo "<br>";
  }
  ?>

    <?php
  $valor = rand(1, 100);
  $inicio = 1;
  while ($inicio <= $valor) {
    echo $inicio;
    echo "<br>";
    $inicio++;
  }
  ?>

</body>
</html>
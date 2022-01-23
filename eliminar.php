<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eliminar Contacto</title>

  <link rel="stylesheet" href="tres.css">
</head>

<body>
  <form class="form" method="post" action="eliminar.php">
    <h2>Eliminar Contacto</h2>
    <p type="Contacto"><input name="id" placeholder="Escribe el numero de contacto a eliminar." required></input></p>
    <input type="submit" name="datos" value="Eliminar">

    <a href="index.html">Volver</a><br>

  </form>

</body>

</html>
<?php
include 'conex.php';
if (isset($_POST['datos'])) {
  $id = $_POST['id'];
  $sql = "select id from datos where id=" . $id;
  $resultado = mysqli_query($con, $sql);
  $dat = mysqli_fetch_assoc($resultado);
  if ($dat != Null) {
    $id2 = $dat['id'];
    $sql2 = "delete from datos where id=" . $id2;
    mysqli_query($con, $sql2);
    echo '<script type="text/javascript">
          alert("Registro borrado con exito");
          window.location.href="index.html";
        </script>';
  } else {
?>
    <script>
      alert("¡El ID introducido no existe!")
    </script>
<?php
  }
}
?>
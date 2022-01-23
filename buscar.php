<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Buscar Contacto</title>

  <link rel="stylesheet" href="buscar.css">
</head>

<body>
  <div>
    <form class="form" method="post" action="buscar.php">
      <h2>Buscar por nombre(s):</h2>
      <input type="text" name="nom" required placeholder="Introduca el nombre de la persona "><br>
      <br><input type="submit" name="datos" value="buscar">
      <a href="index.html">Volver</a><br>
    </form>
  </div>
  <div>
    <?php
    include 'conex.php';
    if (isset($_POST['datos'])) {
      $nombre = $_POST['nom'];
      $sql = "SELECT id, nom, ape1, ape2, fecha_nac, num_tel, correo FROM datos where nom like '$nombre' '%' order by id desc";
      $resultado = mysqli_query($con, $sql);
    ?>
    <div class="borde">
      <div class="table">
        <table border="1">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre(s)</th>
              <th>Apellido paterno</th>
              <th>Apellido materno</th>
              <th>Fecha de nacimiento</th>
              <th>Numero telefonico</th>
              <th>Correo electronico</th>
            </tr>
          </thead>
          <tbody>
      </div>
    </div>
    <?php
      while ($filas = mysqli_fetch_assoc($resultado)) {
      ?>
    <tr>
      <td><?php echo $filas['id'] ?></td>
      <td><?php echo $filas['nom'] ?></td>
      <td><?php echo $filas['ape1'] ?></td>
      <td><?php echo $filas['ape2'] ?></td>
      <td><?php echo $filas['fecha_nac'] ?></td>
      <td><?php echo $filas['num_tel'] ?></td>
      <td><?php echo $filas['correo'] ?></td>
    </tr>
    <?php
      }
      ?>
    </tbody>
    </table>
    <?php
    }
    ?>
  </div>
</body>

</html>
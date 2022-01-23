<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Directorio</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@700&family=M+PLUS+2:wght@100;500;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="contactos.css">

</head>

<body>

  <?php
  include 'conex.php';
  $sql = "select * from datos";
  $resultado = mysqli_query($con, $sql);
  ?>
  <div>
    <a href="index.html">Volver</a><br>
  </div>
  <div class="table">

    <p>Tus Contactos</p>
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
  </div>
</body>


</html>
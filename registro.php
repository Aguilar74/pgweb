<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrar</title>

  <link rel="stylesheet" href="nuevo.css">
</head>

<body>
  <div>

    <!-- *************************** -->
    <form class="form" method="post" action="registro.php">
      <h2>AGREGAR CONTACTO</h2>
      <p type="Name:"><input type="text" name="nom" placeholder="Nombre(s)." required></input></p>
      <p type="Apellido Materno"> <input type="text" placeholder="Apellido paterno." name="ape1" required></p>
      <p type="Apellido materno"><input type="text" name="ape2" placeholder="Apellido materno." required></p>
      <p type="Fecha de nacimiento:"><input type="date" name="nac" placeholder="Fecha de nacimiento." required></p>
      <p type="Numero telefonico:"><input type="tel" name="tel" placeholder="Número telefonico." required></p>
      <p type="Correo electronico:"><input type="email" name="correo" placeholder="Correo electronico." required><br>
      </p>

      <input type="submit" name="datos" value="Enviar">
      <a href="index.html">Volver</a><br>
    </form>


</body>

</html>

<?php
include 'conex.php';
if (isset($_POST['datos'])) {
  $nom = $_POST['nom'];
  $ape1 = $_POST['ape1'];
  $ape2 = $_POST['ape2'];
  $nac = $_POST['nac'];
  $tel = $_POST['tel'];
  $correo = $_POST['correo'];

  $sql = "INSERT INTO datos (nom, ape1, ape2, fecha_nac, num_tel, correo) values ('" . $nom . "','" . $ape1 . "','" . $ape2 . "','" . $nac . "','" . $tel . "','" . $correo . "')";

  if (mysqli_query($con, $sql)) {
    echo '<script type="text/javascript">
          alert("Registro guardado con exito");
          window.location.href="index.html";
        </script>';
    
  } else
    unset($_POST['datos']);
}
?>
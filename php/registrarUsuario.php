<?php
  //conectar el servidor
  $conectar = mysqli_connect('localhost', 'root','');

  //verificar la conexion
  if(!$conectar){
      echo "No se puede realizar la conexion";
  }
  else
  {
      $base = mysqli_select_db($conectar, 'gourmet');
  }
  if(!$base){
      echo "No se encuentra la base de datos";
  }

  //Recuperar las variables del formulario
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $correo = $_POST['correo'];
  $mensaje  = $_POST['mensaje'];

  //sentencias de SQL

  $sql = "INSERT INTO visita VALUES('$nombre','$apellido','$correo','$mensaje')";

  //Ejecutar la sentencia
  $ejecutar = mysqli_query($conectar, $sql);

  //Verificar ejecucion
  if(!$ejecutar){
      echo "Hubo un error";
      }
  else{
      echo "<p>Los datos fueron guardaron correctamente</p><a href='/ProyectoFinal/inicio.html'>Volver</a>";
    }

?>
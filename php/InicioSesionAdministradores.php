<?php
  //conectar el servidor
  $Nombre = $_GET["Nombre"];
  $Apellido = $_GET["Apellido"];
  $Clave = $_GET["Clave"];

  
  $conectar = mysqli_connect('localhost', 'root','',"gourmet");
  //verificar la conexion
  if(mysqli_connect_error()){
      echo "Fallo la conexion: ".mysqli_connect_error();
  }

  //sentencias de SQL

  $sql = "SELECT Nombre, Apellido, Clave FROM empleados WHERE Nombre = '$Nombre' AND Apellido = '$Apellido' AND Clave='$Clave'";

  //Verificar ejecucion
  if($result = mysqli_query($conectar, $sql)){
      $rowCount = mysqli_num_rows($result);
      if($rowCount > 0){
        header("location: /ProyectoFinal/Administradores.html");
      }
      else{
        echo "Error en la autenticacion";
      }
      mysqli_free_result($result);
  }
  mysqli_close($conectar)
?>
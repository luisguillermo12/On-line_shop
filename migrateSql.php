<?php 

  require "sql.sql"

  class conection{
    
    function conectar(){

      $server = "localhost";
      $username = "massaggi_v2";
      $password = "pVFl)iToe$&D";
      $db = "massaggi_v2";

      // Create connection
      $conn = new mysqli($server, $username, $password, $db); 

      return $conn;
    }

    function consultar($sql){
      $conexion = self::conectar();
      if (mysqli_connect_errno()){
          echo "error de conexion";
         }else{
            //die($sql);
              $resultado = $conexion->multi_query($sql);
              $conexion->close();
            return $resultado;
          }  
    }

  }

  $fileSQL = file_get_contents('ruta_fichero.sql');
  
  $model = new conection();
  $model->consultar($sql);
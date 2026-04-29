<?php

  namespace Projeto\config;
  use Exception;
 
  class Conexao{
     public function conectar(){
        try{
          $conn = mysqli_connect('localhost',
                                  'root',
                                  '',
                                  'clVet');
 
          if($conn){
            echo "<br> Conectado com sucesso!";
            return $conn;
          }
          echo "Algo deu errrado!";
        }
        catch(Exception $erro)
        {
          return "Algo deu errado!<br><br> $erro";
        }
      }
  }

  
?>
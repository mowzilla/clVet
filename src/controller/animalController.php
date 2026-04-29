<?php

require_once ('./src/model/Animal.php');
require_once ('./src/DAO/cadastrar.php');

  class AnimalController
  {

    public function cadastrarPet()
    {
      session_start();

      $animal = new Animal();
      $animal->setNome($_POST['nome_animal']);
      $animal->setDtNascimento($_POST['data_nascimento']);
      $animal->setPeso($_POST['peso']);
      $animal->setCodEspecie($_POST['cod_especie']);

      $animal->setCodTutor($_SESSION['tutor_cod']);

      $dao = new AnimalDAO();
      if ($dao->insert($animal)) {
        header("Location: ../view/dashboard.php?msg=pet_ok");
      } else {
        header("Location: ../view/dashboard.php?msg=pet_erro");
      }
    }
  }

?>
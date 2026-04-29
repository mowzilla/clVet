<?php

namespace Projeto\views;

require_once('../config/conexao.php');
require_once('../src/DAO/cadastrar.php');

use Projeto\config\Conexao;
use Projeto\DAO\Cadastrar;

//Chamar as classes que vou utilizar
$conexao = new Conexao(); //Acessar a classe conexao
$cadastrar = new Cadastrar(); //Acessar a classe inserir

?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/assets/css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
</head>

<body>

  <main class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="card shadow-lg border-0 p-4" style="border-radius: 20px;">
            <div class="card-body">
              <h3 class="fw-bold text-center mb-4">Crie sua conta na <span class="text-primary">d'Pelucia</span></h3>

              <form action="../controller/tutorController.php?action=cadastrar" method="POST">
                <div class="mb-3">
                  <label class="form-label fw-semibold">Nome Completo</label>
                  <input type="text" class="form-control" name="nome" placeholder="Seu nome" required>
                </div>

                <div class="mb-3">
                  <label class="form-label fw-semibold">E-mail</label>
                  <input type="email" class="form-control" name="email" placeholder="nome@exemplo.com" required>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Senha</label>
                    <input type="password" class="form-control" name="senha" required>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold">Confirmar Senha</label>
                    <input type="password" class="form-control" name="confirma_senha" required>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 mt-2 mb-3" style="border-radius: 50px; font-weight: 600;">
                  Finalizar Cadastro
                </button>

                <p class="text-center small mb-0">Já tem uma conta? <a href="login.php" class="fw-bold">Faça login</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>
<?php 

namespace Projeto\views;

require_once('../config/conexao.php');
require_once('../src/DAO/consultar.php');

use Projeto\config\Conexao;
use Projeto\DAO\Consultar;

$conexao = new Conexao();
$consultar = new Consultar();

?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/assets/css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LogIn</title>
</head>

<body>


  <main class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">
          <div class="card shadow-lg border-0 p-4" style="border-radius: 20px;">
            <div class="card-body text-center">
              <h3 class="fw-bold mb-4">Bio<span>Vet</span> Login</h3>

              <form action="../controller/loginController.php" method="POST">
                <div class="mb-3 text-start">
                  <label for="email" class="form-label fw-semibold">E-mail</label>
                  <input type="email" class="form-control p-2" id="email" name="email" placeholder="nome@exemplo.com" required>
                </div>

                <div class="mb-4 text-start">
                  <label for="password" class="form-label fw-semibold">Senha</label>
                  <input type="password" class="form-control p-2" id="password" name="senha" placeholder="Sua senha" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 mb-3" style="border-radius: 50px; font-weight: 600;">
                  Entrar
            </div>

            <div class="text-center">
              <a href="#" class="text-decoration-none small">Esqueceu a senha?</a>
              <hr>
              <p class="small mb-0 text-muted">Não tem conta? <a href="cadastrar.php" class="fw-bold">Cadastre-se</a></p>
            </div>
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
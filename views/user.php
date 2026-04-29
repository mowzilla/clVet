<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/assets/css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>d'Pelucia</title>
</head>

<body>


  <header>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="../public/index.php">Bio<span>Vet</span></a>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item"><a class="nav-link" href="../public/index.php">Inicio</a></li>

            <?php if (isset($_SESSION['usuario_id'])): ?>
              <li class="nav-item"><a class="nav-link" href="meus-pets.php">Meus Pets</a></li>
              <li class="nav-item">
                <a class="btn btn-primary ms-lg-3 rounded-pill px-4" href="controller/LoginController.php?action=logout">
                  Sair
                </a>
              </li>
            <?php else: ?>
              <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
              <li class="nav-item"><a class="btn btn-outline-primary ms-lg-3 rounded-pill" href="cadastro.php">Cadastrar</a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>


  </header>

  <main>

    <div class="container py-5">
      <div class="d-flex justify-content-between align-items-center mb-5">
        <div>
          <h2 class="fw-bold">Olá, <span class="text-primary">Rafael</span>!</h2>
          <p class="text-muted">Bem-vindo à sua área exclusiva d'Pelucia.</p>
        </div>
        <button class="btn btn-outline-danger btn-sm">Sair</button>
      </div>

      <div class="row g-4">
        <div class="col-lg-4">
          <div class="card shadow border-0 p-4 h-100" style="border-radius: 20px;">
            <h5 class="fw-bold mb-4"><i class="bi bi-plus-circle me-2"></i>Cadastrar Pet</h5>
            <form action="controller/PetController.php?action=cadastrar" method="POST">
              <div class="mb-3">
                <label class="form-label fw-semibold small">Nome do Pet</label>
                <input type="text" class="form-control" name="nome_pet" placeholder="Ex: Thor" required>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold small">Espécie</label>
                <select class="form-select" name="especie">
                  <option value="cao">Cão</option>
                  <option value="gato">Gato</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold small">Raça</label>
                <input type="text" class="form-control" name="raca" placeholder="Ex: Golden Retriever">
              </div>
              <button type="submit" class="btn btn-primary w-100 mt-2">Salvar Pet</button>
            </form>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="card shadow border-0 p-4 h-100" style="border-radius: 20px;">
            <h5 class="fw-bold mb-4"><i class="bi bi-calendar-event me-2"></i>Novo Agendamento</h5>
            <form action="controller/AgendaController.php?action=agendar" method="POST">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold small">Selecione o Pet</label>
                  <select class="form-select" name="id_pet" required>
                    <option selected disabled>Escolha seu pet</option>
                    <option value="1">Thor (Cão)</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold small">Serviço</label>
                  <select class="form-select" name="servico">
                    <option value="vacina">Vacinação</option>
                    <option value="exame">Exames Laboratoriais</option>
                    <option value="castracao">Esterilização / Castração</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold small">Data</label>
                  <input type="date" class="form-control" name="data_agendamento" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label class="form-label fw-semibold small">Horário</label>
                  <input type="time" class="form-control" name="hora_agendamento" required>
                </div>
              </div>
              <div class="mb-4">
                <label class="form-label fw-semibold small">Observações (Opcional)</label>
                <textarea class="form-control" name="obs" rows="2" placeholder="Algum cuidado especial?"></textarea>
              </div>
              <button type="submit" class="btn btn-primary px-5 py-2 float-end">Confirmar Agendamento</button>
            </form>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-12">
          <h5 class="fw-bold mb-3">Meus Agendamentos</h5>
          <div class="table-responsive bg-white shadow-sm rounded-4 p-3">
            <table class="table table-hover align-middle mb-0">
              <thead class="table-light">
                <tr>
                  <th>Pet</th>
                  <th>Serviço</th>
                  <th>Data/Hora</th>
                  <th>Status</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Thor</strong></td>
                  <td>Vacinação</td>
                  <td>15/05/2026 às 14:00</td>
                  <td><span class="badge bg-warning text-dark">Pendente</span></td>
                  <td><button class="btn btn-sm btn-outline-secondary">Cancelar</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link rel="stylesheet" href="../public/assets/css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boas Vindas dPelucia</title>
</head>

<body>

  <header>
    <div class="container mt-3">
      <nav class="navbar navbar-expand-lg bg-body-tertiary rounded shadow">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">d'Pelucia</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contato</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../views/login.php">Entrar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="8000">
          <img src="../public/assets/img/Cacho-e-gato-juntos-no-chao-posando-pra-foto.webp" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../public/assets/img/como-socializar-cachorro-com-gato-entenda-a-importancia-e1687984126315.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../public/assets/img/CAES-E-GATOS-COM-SEUS-DONOS.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container-md">
      <div class="card mt-5">
        <div class="card-body"  id="welcomeCard">
          <h4 class="card-title">Boas Vindas ao d'Pelucia</h4>
          <p class="card-text">Aliamos o que há de mais moderno na medicina veterinária a um atendimento humanizado, pois entendemos que seu pet é parte fundamental da sua família. Nossa missão é unir inovação e dedicação para garantir uma vida longa e saudável para quem você ama.</p>
          <p class="card-text">Na d'Pelucia, acreditamos que cada pet é um membro único da família. Nossa clínica combina tecnologia de ponta em diagnósticos laboratoriais com um atendimento humanizado e acolhedor. Nossa missão vai além da cura. Focamos na prevenção e no bem-estar integral, oferecendo desde vacinações modernas até cirurgias complexas com monitoramento especializado. Aqui, seu melhor amigo encontra profissionais apaixonados e uma estrutura preparada para garantir uma vida longa, ativa e feliz ao seu lado.</p>
          <a href="../views/login.php" class="btn btn-primary" id="welcomeCardBtn">Agendar consulta</a>
        </div>
      </div>
    </div>

    <div class="container-md">
      <h4 class="h4serv">Serviços</h4>
    </div>

    <!--CARD-->

    <div class="container-md">
      <div class="row">
        <div class="col-md-4">
          <div class="card" id="servCard" style="width: 18rem;">
            <img src="./assets/img/ExamesLab.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">Diagnósticos precisos com equipamentos de ponta para resultados rápidos e eficazes. Realizamos análises clínicas completas para garantir o tratamento mais adequado para o seu melhor amigo.</p>
            </div>
            <a href="../views/login.php" class="btn btn-primary">Solicitar Exames</a>
          </div>
        </div>


        <div class="col-md-4">
          <div class="card mx-auto" id="servCard" style="width: 18rem;" id="midCard">
            <img src="./assets/img/Vacinacao.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">Mantenha a saúde do seu pet em dia com protocolos vacinais modernos e vacinas de alta qualidade. Proteção essencial contra doenças infecciosas para cães e gatos de todas as idades.</p>
            </div>
            <a href="../views/login.php" class="btn btn-primary">Vacinar</a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card ms-auto" id="servCard" style="width: 18rem;" id="rightCard">
            <img src="./assets/img/Castracao.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text">Cirurgias seguras com monitoramento anestésico completo, focando no bem-estar e na prevenção de doenças. Procedimento realizado por especialistas para garantir uma recuperação tranquila.</p>
            </div>
            <a href="../views/login.php" class="btn btn-primary">Castrar</a>
          </div>
        </div>
      </div>

      <!--Counters-->

      <section class="stats-section mt-5 mb-5 py-5">
        <div class="container-md">
          <div class="card stats-card shadow-lg border-0 p-5" id="numberCard">
            <div class="row text-center g-4">
              <div class="col-md-3">
                <h2 class="stat-number">+1.000</h2>
                <p class="stat-label">Unidades no Brasil</p>
              </div>
              <div class="col-md-3">
                <h2 class="stat-number">+500</h2>
                <p class="stat-label">Consultas por Dia</p>
              </div>
              <div class="col-md-3">
                <h2 class="stat-number">15k</h2>
                <p class="stat-label">Pets Atendidos</p>
              </div>
              <div class="col-md-3">
                <h2 class="stat-number">10 Anos</h2>
                <p class="stat-label">De Experiência</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Porque escolher a d'Pelucia-->

      <section class="why-choose-section py-5 bg-light">
        <div class="container-md text-center mb-5">
          <h2 class="fw-bold display-5">Por que Escolher a <span class="text-primary">d'Pelucia</span></h2>
          <p class="text-muted mx-auto" style="max-width: 700px;">
            Sua confiança é o nosso maior patrimônio. Oferecemos uma estrutura completa e equipe
            especializada para garantir que seu melhor amigo receba o melhor cuidado sempre.
          </p>
        </div>

        <div class="container-md">
          <div class="row align-items-center g-4">
            <div class="col-md-4">
              <div class="why-card mb-4 shadow-sm p-4 bg-white rounded-4 border-0 text-start">
                <div class="icon-circle mb-3"><i class="bi bi-check-circle-fill text-primary"></i></div>
                <h5 class="fw-bold">Atendimento 24h</h5>
                <p class="small text-muted">Emergências não têm hora. Estamos prontos para atender seu pet a qualquer momento, todos os dias.</p>
              </div>
              <div class="why-card shadow-sm p-4 bg-white rounded-4 border-0 text-start">
                <div class="icon-circle mb-3"><i class="bi bi-check-circle-fill text-primary"></i></div>
                <h5 class="fw-bold">Especialistas</h5>
                <h5 class="fw-bold">Qualificados</h5>
                <p class="small text-muted">Equipe composta por veterinários especialistas em diversas áreas da medicina.</p>
              </div>
            </div>

            <div class="col-md-4 text-center">
              <img src="../public/assets/img/gato-e-cachorro.jpg" class="img-fluid" alt="Cão e Gato dPelucia">
            </div>

            <div class="col-md-4">
              <div class="why-card mb-4 shadow-sm p-4 bg-white rounded-4 border-0 text-start">
                <div class="icon-circle mb-3"><i class="bi bi-check-circle-fill text-primary"></i></div>
                <h5 class="fw-bold">Tecnologia de Ponta</h5>
                <p class="small text-muted">Equipamentos modernos para diagnósticos rápidos e precisos direto na clínica.</p>
              </div>
              <div class="why-card shadow-sm p-4 bg-white rounded-4 border-0 text-start">
                <div class="icon-circle mb-3"><i class="bi bi-check-circle-fill text-primary"></i></div>
                <h5 class="fw-bold">Fácil Acesso</h5>
                <p class="small text-muted">Localização estratégica com estacionamento próprio para sua total conveniência.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>


    <!--Footer-->

    <footer class="footer-section">
      <div class="container-md">
        <div class="row g-4">
          <div class="col-lg-3 col-md-6">
            <h3 class="footer-logo">d'<span>Pelucia</span></h3>
            <p class="footer-about">
              Dedicados ao bem-estar animal com tecnologia de ponta e o carinho que seu melhor amigo merece.
            </p>
            <div class="social-links">
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-whatsapp"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 ms-lg-auto">
            <h5 class="footer-title">Navegação</h5>
            <ul class="footer-links">
              <li><a href="#">Início</a></li>
              <li><a href="#">Sobre Nós</a></li>
              <li><a href="#">Serviços</a></li>
              <li><a href="#">Contato</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6">
            <h5 class="footer-title">Contato</h5>
            <ul class="footer-contact list-unstyled ps-0 m-0">
              <li>Av. Principal, 1234 - São Paulo/SP</li>
              <li>(11) 96074-9474</li>
              <li>contato@dpelucia.com.br</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6">
            <h5 class="footer-title">Atendimento</h5>
            <ul class="footer-schedule">
              <li>Segunda - Sexta: <span>08h às 20h</span></li>
              <li>Sábado: <span>08h às 14h</span></li>
              <li class="emergency">Emergência 24h: <span>Todos os dias</span></li>
            </ul>
          </div>
        </div>

        <hr class="footer-divider">

        <div class="footer-bottom">
          <div class="row">
            <div class="col-md-6 text-center text-md-start">
              <p>&copy; 2026 d'Pelucia - Todos os direitos reservados.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <p>Desenvolvido por <strong>novaDev Solutions</strong></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </main>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>
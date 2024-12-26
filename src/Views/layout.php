<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?? 'Título Padrão'; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    .main-content {
      min-height: calc(100vh - 450px);
      padding: 2rem 0;
      background-color: #ffffff;
      color: #272b41;
    }

    .section-title {
      color: #914a89;
      font-weight: bold;
      margin-bottom: 1.5rem;
      position: relative;
      padding-bottom: 0.5rem;
    }

    .section-title::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      width: 50px;
      height: 3px;
      background-color: #914a89;
    }

    .card {
      background: #ffffff;
      border: 1px solid #eaeaea;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .card-title {
      color: #272b41;
    }

    .card-text {
      color: #914a89;
    }

    .btn-primary {
      background-color: #914a89;
      border-color: #914a89;
    }

    .btn-primary:hover {
      background-color: #732d6d;
      border-color: #732d6d;
    }

    .breadcrumb {
      background: transparent;
      padding: 0.5rem 0;
    }

    .breadcrumb-item+.breadcrumb-item::before {
      color: #914a89;
    }

    .breadcrumb-item a {
      color: #914a89;
      text-decoration: none;
    }

    .breadcrumb-item.active {
      color: #272b41;
    }

    .footer {
      background: #272b41;
      color: #ffffff;
      padding: 3rem 0;
    }

    .footer-title {
      color: #914a89;
      font-weight: bold;
      margin-bottom: 1.5rem;
    }

    .footer-links li a {
      color: #ffffff;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .footer-links li a:hover {
      color: #914a89;
    }

    .social-icons a {
      color: #ffffff;
      font-size: 1.5rem;
      margin-right: 1rem;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #914a89;
    }

    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      margin-top: 2rem;
      padding-top: 2rem;
    }

    .navbar {
      background: #272b41;
      box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
    }

    .navbar-brand {
      font-weight: bold;
      color: #914a89 !important;
    }

    .nav-link {
      color: #ffffff !important;
      transition: color 0.3s ease;
    }

    .nav-link:hover {
      color: #914a89 !important;
    }

    .search-form .form-control {
      background-color: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      color: #272b41;
    }

    .search-form .form-control:focus {
      background-color: rgba(255, 255, 255, 0.2);
      border-color: #914a89;
      box-shadow: none;
    }

    .search-form .form-control::placeholder {
      color: rgba(39, 43, 65, 0.7);
    }

    .btn-outline-light {
      border-color: #914a89;
      color: #914a89;
    }

    .btn-outline-light:hover {
      background-color: #914a89;
      color: #ffffff;
    }
  </style>


</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark py-3">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <i class="bi bi-film me-2"></i>
          CineWeb
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Filmes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Séries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Categorias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Lançamentos</a>
            </li>
          </ul>

          <form class="search-form d-flex">
            <input class="form-control me-2" type="search" placeholder="Buscar filmes..." aria-label="Search">
            <button class="btn btn-danger" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </form>

          <div class="ms-3 d-flex">
            <button class="btn btn-outline-light me-2">
              <i class="bi bi-person-circle"></i> Login
            </button>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main class="main-content">
    <?php echo $content; ?>
  </main>

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-4">
          <h5 class="footer-title">Sobre o CineWeb</h5>
          <p>Seu portal definitivo para o mundo do cinema. Encontre os melhores filmes, séries e conteúdo exclusivo.</p>
          <div class="social-icons">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-6 mb-4">
          <h5 class="footer-title">Links</h5>
          <ul class="footer-links">
            <li><a href="#">Início</a></li>
            <li><a href="#">Filmes</a></li>
            <li><a href="#">Séries</a></li>
            <li><a href="#">Categorias</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="footer-title">Categorias</h5>
          <ul class="footer-links">
            <li><a href="#">Ação</a></li>
            <li><a href="#">Comédia</a></li>
            <li><a href="#">Drama</a></li>
            <li><a href="#">Documentários</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6">
          <h5 class="footer-title">Newsletter</h5>
          <p>Receba novidades e lançamentos</p>
          <form class="mb-3">
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Seu email">
              <button class="btn btn-danger" type="submit">Assinar</button>
            </div>
          </form>
        </div>
      </div>

      <div class="footer-bottom text-center">
        <p class="mb-0">&copy; 2024 CineWeb. Todos os direitos reservados.</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
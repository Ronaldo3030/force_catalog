<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?? 'Título Padrão'; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="/public/assets/css/style.css">
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
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="/public/assets/js/main.js"></script>
</body>

</html>
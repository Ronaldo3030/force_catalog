<style>
  :root {
    --primary: #6a1b9a;
    --primary-light: #9c27b0;
    --text-dark: #333333;
    --text-light: #666666;
  }

  .main-content {
    padding: 0 !important;
  }

  .hero-section {
    background: linear-gradient(180deg, #1a1c2e, var(--primary));
    color: white;
    padding: 6rem 0;
    position: relative;
    overflow: hidden;
    /* background: #1a1c2e; */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .hero-section::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0.2;
    z-index: 1;

  }

  .hero-content {
    position: relative;
    z-index: 2;
  }

  .section-title {
    color: var(--primary);
    font-weight: bold;
    margin-bottom: 1.5rem;
    position: relative;
    padding-bottom: 0.5rem;
  }

  .section-title::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 3px;
    background-color: var(--primary);
  }

  .movie-info {
    background: white;
    padding: 3rem 0;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
  }

  .info-item {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 8px;
    transition: all 0.3s ease;
  }

  .info-item:hover {
    transform: translateX(10px);
    box-shadow: 0 2px 10px rgba(106, 27, 154, 0.1);
  }

  .info-icon {
    color: var(--primary);
    margin-right: 1rem;
    font-size: 1.5rem;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .synopsis-section {
    position: relative;
    padding: 3rem 0;
    background: white;
  }

  .synopsis {
    max-height: 150px;
    overflow: hidden;
    transition: max-height 0.3s ease;
    line-height: 1.8;
  }

  .synopsis.expanded {
    max-height: 1000px;
  }

  .read-more {
    color: var(--primary);
    cursor: pointer;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    margin-top: 1rem;
  }

  .read-more:hover {
    text-decoration: underline;
  }

  .characters-section {
    padding: 3rem 0;
    background: #f8f9fa;
  }

  .character-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
  }

  .character-item {
    background: white;
    padding: 1.5rem;
    border-radius: 10px;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
  }

  .character-item:hover {
    transform: translateY(-5px) scale(1.02);
    box-shadow: 0 5px 15px rgba(106, 27, 154, 0.15);
    background: var(--primary);
    color: white;
  }

  @media (max-width: 768px) {
    .hero-section {
      padding: 4rem 0;
    }

    .character-grid {
      grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    }
  }
</style>
</head>

<section class="hero-section">
  <div class="container hero-content">
    <h1 class="display-4 fw-bold mb-4" id="movie-title">Revenge of the Sith</h1>
    <div class="badge bg-light text-primary fs-5 px-3 py-2" id="movie-ep">Episódio 3</div>
  </div>
</section>

<section class="movie-info">
  <div class="container">
    <h2 class="section-title">Informações do Filme</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="info-item">
          <span class="info-icon">
            <i class="bi bi-calendar-event"></i>
          </span>
          <div>
            <strong>Data de Lançamento</strong>
            <p class="mb-0" id="movie-date">19/05/2005</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-item">
          <span class="info-icon">
            <i class="bi bi-camera-reels"></i>
          </span>
          <div>
            <strong>Diretor</strong>
            <p class="mb-0" id="movie-director">George Lucas</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-item">
          <span class="info-icon">
            <i class="bi bi-person-circle"></i>
          </span>
          <div>
            <strong>Produtor</strong>
            <p class="mb-0" id="movie-productor">Rick McCallum</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-item">
          <span class="info-icon">
            <i class="bi bi-clock"></i>
          </span>
          <div>
            <strong>Idade do Filme</strong>
            <p class="mb-0" id="movie-age">3 anos 6 meses e 12 dias</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Synopsis Section -->
<section class="synopsis-section">
  <div class="container">
    <h2 class="section-title">Sinopse</h2>
    <div class="synopsis">
      <p id="movie-sinopse">War! The Republic is crumbling under attacks by the ruthless Sith Lord, Count Dooku. There are heroes on both sides. Evil is everywhere.</p>
    </div>
    <span class="read-more">
      Ler mais
      <i class="fas fa-chevron-down ms-2"></i>
    </span>
  </div>
</section>

<!-- Characters Section -->
<section class="characters-section">
  <div class="container">
    <h2 class="section-title">Personagens</h2>
    <div class="character-grid" id="movie-container-characters">
      <div class="character-item">
        <i class="fas fa-user mb-3" style="font-size: 2rem;"></i>
        <h5>Personagem 1</h5>
      </div>
      <div class="character-item">
        <i class="fas fa-user mb-3" style="font-size: 2rem;"></i>
        <h5>Personagem 2</h5>
      </div>
      <div class="character-item">
        <i class="fas fa-user mb-3" style="font-size: 2rem;"></i>
        <h5>Personagem 3</h5>
      </div>
      <div class="character-item">
        <i class="fas fa-user mb-3" style="font-size: 2rem;"></i>
        <h5>Personagem 4</h5>
      </div>
      <div class="character-item">
        <i class="fas fa-user mb-3" style="font-size: 2rem;"></i>
        <h5>Personagem 5</h5>
      </div>
      <div class="character-item">
        <i class="fas fa-user mb-3" style="font-size: 2rem;"></i>
        <h5>Personagem 6</h5>
      </div>
    </div>
  </div>
</section>

<script src="/public/assets/js/movie.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const synopsis = document.querySelector('.synopsis');
    const readMore = document.querySelector('.read-more');
    const icon = readMore.querySelector('i');

    readMore.addEventListener('click', function() {
      synopsis.classList.toggle('expanded');
      if (synopsis.classList.contains('expanded')) {
        readMore.textContent = 'Ler menos ';
        icon.className = 'fas fa-chevron-up ms-2';
      } else {
        readMore.textContent = 'Ler mais ';
        icon.className = 'fas fa-chevron-down ms-2';
      }
      readMore.appendChild(icon);
    });
  });
</script>
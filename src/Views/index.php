<div class="container py-5">
  <h2 class="section-title text-center mb-4">Catálogo de Filmes</h2>

  <div class="search-container">
    <div class="search-form">
      <input type="text" id="search" class="form-control" placeholder="Buscar filmes...">
    </div>
  </div>

  <div class="sort-buttons">
    <button class="sort-btn" id="sortByName">
      Ordenar por Nome
      <i id="name-up" class="icon bi bi-arrow-up-short d-none"></i>
      <i id="name-down" class="icon bi bi-arrow-down-short d-none"></i>
    </button>
    <button class="sort-btn" id="sortByDate">
      Ordenar por Data
      <i id="date-up" class="icon bi bi-arrow-up-short d-none"></i>
      <i id="date-down" class="icon bi bi-arrow-down-short d-none"></i>
    </button>
  </div>

  <div id="movie-container" class="row g-4">
    <div class="w-100 h-100 d-flex justify-content-center my-5 flex-column">
      <p class="text-center w-100 mb-2">Carregando...</p>
      <div class="w-100 h-100 d-flex justify-content-center gap-2">
        <span class="point"></span>
        <span class="point"></span>
        <span class="point"></span>
      </div>
    </div>
  </div>
</div>

<script src="/public/assets/js/home.js"></script>
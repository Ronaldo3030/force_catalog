const apiUrl = "http://localhost:8000/api";

function displayMovies(movieList) {
  const container = $('#movie-container');
  const html = movieList.map((movie, index) => `
      <div class="col-md-4 fade-in" style="animation-delay: ${index * 0.1}s">
        <a href="/movie?id=${movie.uid}">
          <div class="movie-card">
            <div class="movie-rating">Episódio ${movie.properties.episode_id}</div>
            <div class="movie-content">
              <h3 class="movie-title">${movie.properties.title}</h3>
              <p class="movie-year">${new Date(movie.properties.release_date).toLocaleDateString()}</p>
            </div>
          </div>
        </a>
      </div>
  `).join('');
  container.html(html);
}

$(document).ready(function () {
  $.ajax({
    url: `${apiUrl}/films`,
    method: 'GET',
    success: function (response) {
      const movies = response;
      displayMovies(movies);

      // Inicializar filtros sem ícones visíveis
      // $('#name-up, #name-down, #date-up, #date-down').addClass("d-none");

      // Evento para manipular os botões de filtro
      $(".sort-btn").on('click', function (e) {
        let buttonSelected = e.target.id;

        if (buttonSelected === "sortByName") {
          // Ativar o filtro por nome e desativar o de data
          $('#date-down, #date-up').addClass("d-none"); // Esconde setas de data
          $('#name-up').toggleClass("d-none"); // Alterna seta de nome (crescente)
          const isAscending = $('#name-up').hasClass("d-none");
          $('#name-down').toggleClass("d-none", !isAscending); // Alterna seta de nome (decrescente)

          const sortedMovies = [...movies].sort((a, b) =>
            isAscending
              ? b.properties.title.localeCompare(a.properties.title)
              : a.properties.title.localeCompare(b.properties.title)
          );

          displayMovies(sortedMovies); // Mostra os filmes ordenados
        } else if (buttonSelected === "sortByDate") {
          // Ativar o filtro por data e desativar o de nome
          $('#name-down, #name-up').addClass("d-none"); // Esconde setas de nome
          $('#date-up').toggleClass("d-none"); // Alterna seta de data (crescente)
          const isAscending = $('#date-up').hasClass("d-none");
          $('#date-down').toggleClass("d-none", !isAscending); // Alterna seta de data (decrescente)

          const sortedMovies = [...movies].sort((a, b) =>
            isAscending
              ? new Date(a.properties.release_date) - new Date(b.properties.release_date) // Ascendente
              : new Date(b.properties.release_date) - new Date(a.properties.release_date) // Descendente
          );

          displayMovies(sortedMovies); // Mostra os filmes ordenados
        }
      });

      $('#search').on('input', function () {
        const searchTerm = $(this).val().toLowerCase();
        const filteredMovies = movies.filter(movie =>
          movie.properties.title.toLowerCase().includes(searchTerm)
        );
        displayMovies(filteredMovies);
      });
    },
    error: function (error) {
      console.error(`Error: ${error.statusText}`);
    }
  });
});

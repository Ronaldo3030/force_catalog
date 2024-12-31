const API_URL = "http://localhost:8000/api";

class MovieDetails {
  constructor() {
    this.containerCharacters = $('#movie-container-characters');
  }

  static getUrlParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
  }

  async fetchCharacterDetails(url) {
    try {
      const response = await $.get(url);
      return `
        <div class="character-item">
          <i class="fas fa-user mb-3" style="font-size: 2rem;"></i>
          <h5>${response.result.properties.name}</h5>
        </div>`;
    } catch (error) {
      console.error('Error fetching character:', error);
      return '';
    }
  }

  async displayCharacters(characters) {
    const characterElements = await Promise.all(
      characters.map(url => this.fetchCharacterDetails(url))
    );
    this.containerCharacters.html(characterElements.join(''));
  }

  updateMovieInfo(movie) {
    const elements = {
      'movie-title': movie.properties.title,
      'movie-ep': `Episódio ${movie.properties.episode_id}`,
      'movie-date': formatToBrDate(movie.properties.release_date),
      'movie-director': movie.properties.director,
      'movie-productor': movie.properties.producer,
      'movie-age': `${movie.properties.age.years} anos ${movie.properties.age.months} meses e ${movie.properties.age.days} dias`,
      'movie-sinopse': movie.properties.opening_crawl
    };

    Object.entries(elements).forEach(([id, value]) => {
      $(`#${id}`).text(value);
    });
  }

  async init() {
    try {
      const movieId = MovieDetails.getUrlParameter('id');
      const response = await $.get(`${API_URL}/films/${movieId}`);
      
      this.updateMovieInfo(response);
      await this.displayCharacters(response.properties.characters);
    } catch (error) {
      console.error('Error fetching movie details:', error);
    }
  }
}

$(document).ready(() => {
  const movieDetails = new MovieDetails();
  movieDetails.init();
});
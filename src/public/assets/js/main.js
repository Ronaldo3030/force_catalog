$(document).ready(function() {
  $.get("http://localhost:8000/api/films", function(data, status){
    console.log(data)
  })
});
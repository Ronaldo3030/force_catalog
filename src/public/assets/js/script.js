const fetchData = (url) => {
  return new Promise((resolve, reject) => {
    $.ajax({
      url: url,
      method: 'GET',
      success: resolve,
      error: (jqXHR, textStatus, error) => {
        console.error('Error fetching data:', error);
        reject(error);
      }
    });
  });
};

const formatToBrDate = (date) => {
  //EXAMPLE DATE = "1999-06-23"
  //EXAMPLE RETURN = "23/06/1999"
  return date.split("-").reverse().join("/");
}
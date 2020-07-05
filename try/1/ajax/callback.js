var postContainer = document.getElementById('post-info')
var btn = document.getElementById('btn');

btn.addEventListener("click", function () {

  // start of ajax call
  var ourRequest = new XMLHttpRequest();
  ourRequest.open('GET', 'http://localhost/websites/restApiPhp/1/api/post/read.php');
  ourRequest.onload  = function () {
    //parse to json
    var ourData = JSON.parse(ourRequest.responseText);
    renderHTML(ourData);

  };

  ourRequest.send();
  // End of ajax call


});

// display to the page
function renderHTML(data) {
  var htmlString = "";
  // loop through  json data passed through the function and concatenate to htmlString variable
  for (var i = 0; i < data.length; i++) {
    htmlString+= "<p>" + data[i].title + " <- title post , body -> " + data[i].body + " author -> " + data[i].author + ".</p>";
  }

  postContainer.insertAdjacentHTML('beforeend', htmlString);

}

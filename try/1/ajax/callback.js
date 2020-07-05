var postContainer = document.getElementById('animal-info')
var btn = document.getElementById('btn');

btn.addEventListener("click", function () {

  // start of ajax call
  var ourRequest = new XMLHttpRequest();
  ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-1.json');
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
    htmlString+= "<p>" + data[i].name + " is a " + data[i].species + ".</p>";
  }

  postContainer.insertAdjacentHTML('beforeend', htmlString);

}

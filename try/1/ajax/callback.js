var pageCounter = 1;
var postContainer = document.getElementById('animal-info')
var btn = document.getElementById('btn');

btn.addEventListener("click", function () {

  // start of ajax call
  var ourRequest = new XMLHttpRequest();
  ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-'+ pageCounter +'.json');
  ourRequest.onload  = function () {
    //parse to json
    var ourData = JSON.parse(ourRequest.responseText);
    renderHTML(ourData);

  };
  // console.log(pageCounter);

  ourRequest.send();
  // End of ajax call

  pageCounter++;

  // if you press button three times the hide button will disaper
  if(pageCounter > 3){
    // btn.classList.add("hide-me");
    document.getElementById('btn').style.visibility = "hidden";
  }

});

// display to the page
function renderHTML(data) {
  var htmlString = "";
  // loop through  json data passed through the function and concatenate to htmlString variable
  for (var i = 0; i < data.length; i++) {
    htmlString+= "<p>" + data[i].name + " is a " + data[i].species + " .</p> ";
   }

  postContainer.insertAdjacentHTML('beforeend', htmlString);

}

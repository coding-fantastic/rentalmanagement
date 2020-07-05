var ourRequest = new XMLHttpRequest();
ourRequest.open('GET', 'http://localhost/websites/restApiPhp/1/api/post/read.php');
ourRequest.onload  = function () {
  //parse to json 
  var ourData = JSON.parse(ourRequest.responseText);
  //load first object on the console
  console.log(ourData[0]);

};

ourRequest.send();

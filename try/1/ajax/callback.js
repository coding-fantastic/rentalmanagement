var ourRequest = new XMLHttpRequest();
ourRequest.open('GET', 'http://localhost/websites/restApiPhp/1/api/post/read.php');
ourRequest.onload  = function () {
  var ourData = JSON.parse(ourRequest.responseText); 
  console.log(ourData[0]);

};

ourRequest.send();

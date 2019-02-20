<?php
// Get status code from SERVER.
$status = $_SERVER['REDIRECT_STATUS'];
// Array with statuscodes, each containing a title and a message.
$codes = array(
  200 => array('200 - OK!', 'The server is up and running!'),
  403 => array('403 - Forbidden', 'The page you were trying to reach is forbidden.', "index.html"),
  404 => array('404 - Not Found', 'The page or file you tried to access can not be found on this website.', "index.html"),
  500 => array('500 - Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.', "#"),
  503 => array('503 - Service Unavailable', 'Maintence Occuring...', "#"),
);
// Get the title and message based on the status code.
$title = $codes[$status][0];
$message = $codes[$status][1];
$link = $codes[$status][2];
// Alter message if the status code does not exist in the array.
if ($title == false || strlen($status) != 3) {
  $title = 'What happened?!';
  $message = 'Something weird happend and we don\'t know what to do...';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <title><?php echo $title ?></title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="index.html">Ian's Site</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
		 <li class="nav-item active text-primary"> <a class="nav-link" href="projectidaeus.html">Project Idaeus<span class="sr-only">(current)</span></a> </li>
      <li class="nav-item active"> <a class="nav-link" href="TrinketProjects.html">Trinket Projects<span class="sr-only">(current)</span></a> </li>
 <li class="nav-item active"> <a class="nav-link" href="codeprojects.html">code.org Projects<span class="sr-only">(current)</span></a> </li>
<li class="nav-item active"> <a class="nav-link" href="ScratchProjects.html">Scratch Projects<span class="sr-only">(current)</span></a> </li>
<li class="nav-item active"> <a class="nav-link" href="StickLife.html">Stick Life Comix<span class="sr-only">(current)</span></a> </li>
<li class="nav-item active"> <a class="nav-link" href="downloads.html">Downloads<span class="sr-only">(current)</span></a> </li>
</ul>
</div>
</nav>
<p><br><br></p>
    <div class="vertical-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-8 col-xs-12">
            <h3><?php echo $title ?></h3>
            <p><?php echo $message ?></p>
            <a class="btn btn-dark" href="javascript:history.back()">Go Back</a> <a class="btn btn-dark" href="/index.html">Take me Home!</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

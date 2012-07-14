<?php
include 'helper.php';

echo '<!DOCTYPE html PUBLIC>
<html lang="de-De">
<head>
  <meta charset="utf-8">
  <title>Tischlerei Liebau</title>

  <link rel="stylesheet" href="media/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="media/css/tischlerei.css" type="text/css" />
  <link rel="stylesheet" href="media/css/bootstrap-responsive.css" type="text/css" />
  <link rel="stylesheet" href="media/css/jquery.lightbox-0.5.css" type="text/css" />


  <script type="text/javascript" src="media/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="media/js/bootstrap.js"></script>
  <script type="text/javascript" src="media/js/tischlerei.js"></script>
  <script type="text/javascript" src="media/js/lightbox.js"></script>
  <script type="text/javascript" src="media/js/jquery.lightbox-0.5.min.js"></script>
</head>
<body  data-offset="50">
';
include 'navbar.php';
echo '
<div class="container">
  <div class="content well">';

switch (intval(getSite($_GET))) {
    case 0:       // main
        include 'main.php';
        break;
    case 1:       // referenzen
        include 'referenzen.php';
        break;
    case 2:       // kontakt
        include 'kontakt.html';
        break;
    case 3:       // impressum
        include 'impressum.html';
        break;
}
echo '
</div>
</div>
</body>
</html>';
 ?>
<h2 class="centered">Herzlich Willkommen!</h2>

<div class="row-fluid">
  <div class="span6 centered visible-desktop">
    <p>
      Schön, dass Sie hergefunden haben!
    </p>
    <p>
      Auf dieser Seite präsentiert sich die Tischlerei Liebau. 
    </p>
    <p><?php   
     echo "<img src='".imgDir()."hof.jpg'>";
    ?></p>
    <p>Sie wollen uns kontaktieren? Ein Klick genügt!</p>
    <p>Unter Referenzen können Sie einige unserer Schmuckstücke bewundern.</p>
    <p>Viel Spaß beim Stöbern!</p>
  </div>
  <div class="span12 centered hidden-desktop">
    <p>
      Schön, dass Sie hergefunden haben!
    </p>
    <p>
      Auf dieser Seite präsentiert sich die Tischlerei Liebau. 
    </p>
    <p><?php   
     echo "<img src='".imgDir()."hof.jpg'>";
    ?></p>
    <p>Sie wollen uns kontaktieren? Ein Klick genügt!</p>
    <p>Unter Referenzen können Sie einige unserer Schmuckstücke bewundern.</p>
    <p>Viel Spaß beim Stöbern!</p>
  </div>
  <div id="myCarousel" class="carousel slide span6 well visible-desktop">
    <div class="carousel-inner">
    <?php 
      if ($handle = opendir(slideShowDir())) {
        $first=true;
        while (false !== ($file = readdir($handle))) {
          if ($file != "." && $file != "..") {
            echo slideItem($file, $first);
            if($first){
              $first = false;
            }
          }
        }
        closedir($handle);
      }
    ?>
    <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>-->
  </div>
</div>
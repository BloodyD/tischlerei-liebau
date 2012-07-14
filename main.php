
<div class="row-fluid">
  <div id="myCarousel" class="carousel slide span6 well">
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
<?php 
  function arg()
  {
    return "showSite";
  }
  function imgDir(){
    return './media/img/';
  } 

  function referenceDir(){
    return imgDir().'referenzen/';
  }
  function slideShowDir(){
    return imgDir().'slideshow/';
  }

  function homeLink(){
    return "/tischlerei-liebau/index.php";
  }
  function referenceLink(){
    return homeLink()."?".arg()."=1";
  }
  function contactLink(){
    return homeLink()."?".arg()."=2";
  }
  function imprintLink(){
    return homeLink()."?".arg()."=3";
  }

  function getBigPictureName($fileName){
    return str_replace('.th.', '.', $fileName);
  }

  function getNumOFiles($folderName)
  {
    $counter = 0;
    if ($handle = opendir($folderName)) {
      while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && is_file($folderName.$file)) {
          $counter++;
        }
      }
      closedir($handle);
    }
    return $counter;
  }

  function listReferences($dir, $number, $picsInRow){
    echo "
      <div class='accordion-group'>
        <div class='accordion-heading'>
          <a class='accordion-toggle' data-toggle='collapse' data-parent='#references' href='#collapse".(string)$number."'>
            <h3>".$dir."</h3>
          </a>
        </div>
        <div id='collapse".(string)$number."' class='accordion-body collapse'>
          <div class='accordion-inner'>";
    $picNumber = 0;
    $folderName = referenceDir().$dir."/";
    $picCount = getNumOFiles($folderName);
    if ($handle = opendir($folderName)) {
      while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && is_file($folderName.$file)) {
          if(($picNumber % $picsInRow) == 0){
            echo "<div class='row-fluid'>";
          }
          echo "<div class='span".(12/$picsInRow)."'>";
          echo "<a href='".$folderName."big/".getBigPictureName($file)."' class='thumbnail well' rel='lightbox'>
            <img src='".$folderName.$file."'>
          </a></div>";
          if((($picNumber % $picsInRow) == $picsInRow-1) || ($picNumber == $picCount-1)){
            echo "</div>";  
          }
          $picNumber++;
        }
      }
      closedir($handle);
    }

    echo "</div></div></div>";
  } 

  function slideItem($picture, $active = false)
    {
      if($active){
        return '<div class="item active">
          <img src="'.slideShowDir().$picture.'" alt="">
        </div>';
      }else{
        return '<div class="item">
          <img src="'.slideShowDir().$picture.'" alt="">
        </div>';
      }
    }

  function getSite($getArray)
    {
      if(array_key_exists(arg(), $getArray)) {
        return $getArray[arg()];
      } else {
        return "0";      
      }
    }
 ?>
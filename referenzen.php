<?php 
  if ($handle = opendir(referenceDir())) {
    $number = 0;
    $picturesInRow = 4;
    echo '<div class="accordion" id="references">';
    while (false !== ($file = readdir($handle))) {
      if ($file != "." && $file != ".." && is_dir(referenceDir().$file)) {
          $number++;
          listReferences($file, $number, $picturesInRow);
      }
    }
    closedir($handle);
  }
 ?>
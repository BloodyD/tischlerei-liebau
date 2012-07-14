<?php 
  function renderHeader($value = '0')
  {
    echo "
<div class='navbar navbar-fixed-top'>
  <div class='navbar-inner'>
    <div class='container'>
      <a class='btn btn-navbar' data-toggle='collapse' data-target='.nav-collapse'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </a>
      <a class='brand' href=".homeLink().">Tischlerei Liebau</a>
      <div class='nav-collapse'>
        <ul class='nav'>";

      echo "<li";
      if($value=='0'){echo " class='active' ";} 
      echo "><a href=".homeLink().">
        <i class='icon-home icon-white'></i> Startseite</a></li>";
      echo "<li"; 
      if($value=='1'){echo " class='active' ";} 
      echo "><a href=".referenceLink().">
        <i class='icon-book icon-white'></i> Referenzen</a></li>";
      echo "<li";
      if($value=='2'){echo " class='active' ";} 
      echo "><a href=".contactLink().">
        <i class='icon-user icon-white'></i> Kontakt</a></li>";
      echo "<li";
      if($value=='3'){echo " class='active' ";} 
      echo "><a href=".imprintLink().">
        <i class='icon-info-sign icon-white'></i> Impressum</a></li>";
    echo "
    <li class='divider-vertical'></li>
    </ul>

    <ul class='nav pull-right'>
      <li class='divider-vertical'></li>
      <li>
        <a href='mailto:kontakt@tischlerei-liebau.de'>
        <i class='icon-envelope icon-white'></i> E-Mail senden</a>
      </li>

      <li class='divider-vertical'></li>

    </ul>
      </div><!-- /.nav-collapse -->
    </div>
  </div><!-- /navbar-inner -->
</div>";
  }

 ?>
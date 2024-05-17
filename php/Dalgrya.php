<?php
include_once("../includes/config.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dalgrya.css">
    <title><?= $title['dalgrya'] ?></title>
</head>
<body style=" background-color: rgb(15,15,15);">

  

<div class="topnav ">
  <div class="tnav  mx-auto">
  <?php include_once("../includes/header.php") ?>
  <img src="dream.jpg" alt="Cinque Terre" width="1905" height="720" >
  </div>
</div>
<br>
<h1 class="title1" style="  color: rgb(185,40,40);">Dalgrya Series</h1>
<br>
<p style="text-align: center;">A Dalgrya series több különböző történetből vagy egymáshoz kapcsolódó történetek gyüjteménye, a project tartalmazz novellákat, képregényeket/mangákat, játékokat<p>
 
  
  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Story')">Story</button>
  <button class="tablinks" onclick="openCity(event, 'Gallery')">Gallery</button>
  <button class="tablinks" onclick="openCity(event, 'Games')">Games</button>
</div>


<div id="Story" class="tabcontent">
  <h3>Story</h3>
  <p>Story feltöltés érdeklődés hiánya miatt elmarad.</p>
</div>

<div id="Gallery" class="tabcontent">
  <h3>Gallery</h3>
  <a href="./Gallery.php" class="button"> Gallery</a>
</div>

<div id="Games" class="tabcontent">
  <h3>Games</h3>
 <a href="./games.php"class="button">Games</a> 
</div>


<br>
<p style = "text-align: center;">pár másodperces teaser: </p>
  <div class="d1">
    <div class="d2 col-4 mx-auto"> 
    <video width="640" height="480" controls>
    <source src="Dalgrya series.mp4" type="video/mp4">
  </video>
    </div>
  </div>


<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>

</body>
</html>
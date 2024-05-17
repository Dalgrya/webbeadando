<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../php/dalgrya.css">
    <title>Enter Ghost</title>
</head>
<body style="background-color: rgb(15,15,15);">

<div class="topnav">
<?php include_once("../includes/header.php") ?>
</div>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Story')">Story</button>
  <button class="tablinks" onclick="openCity(event, 'Gallery')">Gallery</button>
  <button class="tablinks" onclick="openCity(event, 'Games')">Games</button>
</div>

<!-- Tab content -->
<div id="Story" class="tabcontent">
  <h3>Story</h3>
  <p>This is the story tab content.</p>
</div>

<div id="Gallery" class="tabcontent">
  <h3>Gallery</h3>
  <a href="./EGGallery.php" class="button"> Gallery</a>
</div>

<div id="Games" class="tabcontent">
  <h3>Games</h3>
  <p>This is the games tab content.</p>
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
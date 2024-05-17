<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../php/dalgrya.css">
    <title>Dalgrya || Gallery</title>
    <style>
        .tabcontent {
            display: none;
        }
    </style>
</head>
<body style="background-color: rgb(15,15,15);">

<div class="topnav">
<?php include_once("../includes/header.php") ?>
</div>

<button class="tablinks" onclick="openCity(event, 'Dalgrya_characters')">Dalgrya characters</button>
<button class="tablinks" onclick="openCity(event, 'NSFW')">NSFW</button>



<div id="Dalgrya_characters" class="tabcontent">
  <h3>Gallery</h3>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="hatter.jpg">
        <img src="hatter.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">Dana</div>
    </div>
  </div>

  <a target="_blank" href="Danav4.jpg">
  
        <img src="Danav4.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
 

</div>

<div id="NSFW" class="tabcontent">
  <h3>NSFW</h3>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="images.jpg">
        <img src="images.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">bonk</div>
    </div>
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

<form action="upload.php" method="post" enctype="multipart/form-data">
   
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Feltöltés" name="submit">
</form>

</body>
</html>

</body>
</html>
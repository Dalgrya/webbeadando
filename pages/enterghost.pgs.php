<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../php/dalgrya.css">
    <title>EnterGhost || Gallery</title>
    <style>
        .tabcontent {
            display: none;
        }
    </style>
</head>
<body>



<button class="tablinks" onclick="openCity(event, 'characters')">characters</button>




<div id="characters" class="tabcontent">
  <h3>Gallery</h3>

  <div class="responsive">
    <div class="gallery">
      <a target="_blank" href="Darkh.png">
        <img src="./images/Darkh.png" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc"></div>
    </div>
  </div>

  <a target="_blank" href="CrimsonX.png">
        <img src="./images/CrimsonX.png" alt="Cinque Terre" width="600" height="400">
      </a>

      <a target="_blank" href="Megafire1.png">
        <img src="./images/Megafire1.png" alt="Cinque Terre" width="600" height="400">
      </a>

      <a target="_blank" href="Zero.png">
        <img src="./images/Zero.png" alt="Cinque Terre" width="600" height="400">
      </a>
 

</div>

<iframe width="560" height="315" src="https://www.youtube.com/embed/VhN9TZ8eRHM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  

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
<div class="fnf"style="text-align:center;">
<form action="upload.php" method="post" enctype="multipart/form-data">
</div>

   
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Feltöltés" name="submit">
</form>

</body>
</html>

</body>
</html>
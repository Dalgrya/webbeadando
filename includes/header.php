<?php
include_once("config.php");
include_once("../php/login.php");

function isloggedin()
{
    return isset($_SESSION['username']);
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav  me-auto mb-2 mb-lg-0 mx-auto">
      <?php
        foreach($menu as $key =>$item){?>
     
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo $item?>"><?php echo $key?></a>
        </li>
       <?php } ?> 
      </ul>
    </div>
  </div>
</nav>
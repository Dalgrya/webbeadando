<?php 
include_once('./includes/config.inc.php'); 
?>


<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <!-- Navbár és link/oldal kiíratása -->
      <ul class="navbar-nav mx-auto">  
        <?php foreach($oldalak as $url => $oldal) { ?>
            <?php if((!isset($_SESSION['username']) && $oldal['menun'][0] || 
                       isset($_SESSION['username']) && $oldal['menun'][1])) { ?>
                <li class="nav-item" <?= (($oldal == $keres)?' active':'') ?>>
                    <a style="color: white;" class="nav-link active" aria-current="page" href="<?= ($url == '/' ?'.':('?page='.$url)) ?>">
                        <?= $oldal['szoveg'] ?>
                    </a>
                </li>
            <?php } ?>
        <?php } ?>
      </ul>
    </div>
    </div>
  </div>
</nav>


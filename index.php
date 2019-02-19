<?php
// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

// Inkludera en gemensam jumbotron-template (som alla sidor i denna appen inkluderar)
require("templates/jumbotron.php");

/**
 * Hämta ut alla artister och loopa över dem
 * För varje artist skriva ut artistens namn och ha en länk till en enskild artist alla album
 */

  $artistController = new ArtistController();
  $artists = $artistController->getArtists();
 ?>

<div class="row d-flex justify-content-around frontpage">
  <?php foreach ($artists as $artist) : ?>
  <div class="card mt-4" style="width: 18rem;">
    <img src="public/img/guitar.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"><?php echo $artist->getName(); ?></h5>
      <p class="card-text">Date of birth: <?php echo $artist->getBirthday(); ?></p>
      <a href="albums.php?id=<?php echo $artist->getId(); ?>" class="btn btn-primary spectrum-background">See my Albums</a>
    </div>
  </div>
  <?php endforeach; ?>
</div>  

<?php
// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
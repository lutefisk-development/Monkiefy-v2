<?php
// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

// Inkludera en gemensam jumbotron-template (som alla sidor i denna appen inkluderar)
require("templates/jumbotron.php");

/**
 * Hämta ut alla låtar tillhörande vald album.
 * Genom en loop skriva ut resultat i webläsaren
 */

$trackController = new TrackController();
$id = $_REQUEST['id'];
$tracks = $trackController->getTracks($_REQUEST['id']);
?>

<div class="jumbotron jumbotron-fluid spectrum-background text-center regAlbmJumbo">
  <div class="container">
    <h5 class="display-6"><span class="regi-span">Monkiefy</span> tracks to this album</h5>
    <a href="regTracks.php?id=<?php echo $id ?>" class="btn btn-primary spectrum-background">Click me to add Tracks</a>
  </div>
</div>

<div class="my-3 p-3 rounded shadow-sm spectrum-background" style="color: white;">
  <h6 class="border-bottom border-gray pb-2 mb-0">Album Name: <?php echo $tracks[0]->albums_name; ?></h6>
  <?php foreach ($tracks as $track) : ?>
  <div class="media text-muted pt-3">
    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" style="color: white;">
      <strong class="d-block text-gray-dark">Track Name: &nbsp;&nbsp;&nbsp;<span class="span-tracks"><?php echo $track->tracks_name; ?></span></strong>
      <i class="fas fa-music"></i>
      &nbsp; Duration: &nbsp;&nbsp;&nbsp;<span class="span-tracks"><?php echo $track->getLength(); ?></span>
    </p>
  </div>
  <?php endforeach; ?>
</div>

<?php
// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
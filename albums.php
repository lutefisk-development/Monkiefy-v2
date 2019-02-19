<?php
// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

// Inkludera en gemensam jumbotron-template (som alla sidor i denna appen inkluderar)
require("templates/jumbotron.php");

/**
 * Hämta ut alla album till vars artist man klickade på i index.php
 * För varje album, skriva ut titel och vilken genre
 */

  $albumController = new AlbumController();
  $id = $_REQUEST['id'];
  $albums = $albumController->getAlbums($_REQUEST['id']);
?>

<div class="jumbotron jumbotron-fluid spectrum-background text-center regAlbmJumbo">
  <div class="container">
    <h5 class="display-6"><span class="regi-span">Monkiefy</span> an album to your account</h5>
    <a href="regAlbum.php?id=<?php echo $id ?>" class="btn btn-primary spectrum-background">Click me to add Album</a>
  </div>
</div>

<div class="down">
<?php foreach ($albums as $album) : ?>
<div class="card mb-5 mt-5">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="public/img/album_img.jpg" class="img-in-card" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body outer-cont spectrum-background">
        <h5 class="card-title">Artist: <?php echo $album->artists_name; ?></h5>
        <h5 class="card-title">Album Title: <?php echo $album->albums_name; ?></h5>
        <p class="card-text">Genre: <?php echo $album->getGenre() ?></p>
        <a href="tracks.php?id=<?php echo $album->albums_id; ?>" class="btn btn-primary spectrum-background">Tracks on this Album</a>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
</div>

<?php
// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
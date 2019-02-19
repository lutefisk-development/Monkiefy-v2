<?php
// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

// Inkludera en gemensam jumbotron-template (som alla sidor i denna appen inkluderar)
require("templates/jumbotron.php");

/**
 * Registrera nytt album till sin konto
 * 
 */
  $id = $_REQUEST['id'];
?>

<div class="jumbotron jumbotron-fluid spectrum-background mem-regform">
  <div class="container">
    <form class="form-signin" action="save_regAlbum.php" method="POST">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Add an album to your <span class="regi-span">Monkiefy</span> album list</h1>
      </div>
      <input type="hidden" id="<?php echo $id; ?>" name="id" value="<?php echo $id; ?>">
      <div class="form-label-group">
        <input type="text" id="artistName" class="form-control" placeholder="Type in the name of your Album" required autofocus name="albumName">
        <label for="albumName">Album Name</label>
      </div>

      <div class="form-label-group">
        <input type="text" id="birthday" class="form-control" placeholder="What kind of music is it" required autofocus name="genre">
        <label for="genre">Genre</label>
      </div>

      <button class="btn btn-primary spectrum-background reg-button" type="submit"><span class="regi-span">Monkiefy</span> My Album</button>
    </form>
  </div>
</div>

<?php
// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
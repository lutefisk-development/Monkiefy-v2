<?php
// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

// Inkludera en gemensam jumbotron-template (som alla sidor i denna appen inkluderar)
require("templates/jumbotron.php");

/**
 * Visa ut till användaren som registreringen gick bra, eller inte
 */

$albumController = new AlbumController();
$res = $albumController->createAlbum($_POST['id'], $_POST['albumName'], $_POST['genre']);
?>

<div class="jumbotron jumbotron-fluid jumbotronRegMem text-center spectrum-background">
  <div class="container">
    <div class="row">
      <div class="col-8">
      <?php
          if ($res) {
        ?>
        <h3 class="display-6 message-jumbo">🙈 Congratz on creating a <span class="regi-span">Monkiefy</span> album 🙉</h3>
        <?php
          } else {
        ?>
        <h3 class="display-6 message-jumbo">🙊 Oooops, something went wrong 🙊</h3>
        <?php
        }
        ?>
      </div>
      <div class="col-4" id="happy-monkey">
        <img src="public/img/happy.png" alt="glad apa" class="happy-monkey">
      </div>
    </div>
  </div>
</div>


<?php
// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
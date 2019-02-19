<?php
// Starta upp appen (ladda in alla nödvändiga klasser och evenuellt skapa anslutningar)
require("core/bootstrap.php");

// Inkludera en gemensam header-template (som alla sidor i denna appen inkluderar)
require("templates/header.php");

// Inkludera en gemensam jumbotron-template (som alla sidor i denna appen inkluderar)
require("templates/jumbotron.php");

/**
 * Visa et formulär för att registrera sig som användare av deras tjänst.
 */
?>

<div class="jumbotron jumbotron-fluid spectrum-background mem-regform">
  <div class="container">
    <form class="form-signin" action="save_regmember.php" method="POST">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Become a <span class="regi-span">Monkiefy</span> artist</h1>
      </div>

      <div class="form-label-group">
        <input type="text" id="artistName" class="form-control" placeholder="Your Name" required autofocus name="artistName">
        <label for="artistName">Artist Name</label>
      </div>

      <div class="form-label-group">
        <input type="text" id="birthday" class="form-control" placeholder="Your Birthday:   YYYY-MM-DD" required autofocus name="birthday">
        <label for="birthday">Artist Birthday</label>
      </div>

      <button class="btn btn-primary spectrum-background reg-button" type="submit"><span class="regi-span">Monkiefy</span> Me</button>
    </form>
  </div>
</div>

<?php
// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
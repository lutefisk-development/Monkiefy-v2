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
    <form class="form-signin" action="save_regTracks.php" method="POST">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal"><span class="regi-span">Monkiefy</span> your album with these tracks:</h1>
      </div>

        <input type="hidden" id="<?php echo $id; ?>" name="id" value="<?php echo $id; ?>">

        <div class="form-label-group">
          <div class="row">
            <div class="col">
              <input type="text" id="trackName" class="form-control" placeholder="Track Name"  autofocus name="trackNames[]">
              <label for="trackName">Track Name</label>
            </div>
            <div class="col">
              <input type="text" id="length" class="form-control" placeholder="Track Length" autofocus name="lengths[]">
              <label for="length">Track Length</label>
            </div>
          </div>
        </div> 

        <div class="form-label-group">
          <div class="row">
            <div class="col">
              <input type="text" id="trackName" class="form-control" placeholder="Track Name"  autofocus name="trackNames[]">
              <label for="trackName">Track Name</label>
            </div>
            <div class="col">
              <input type="text" id="length" class="form-control" placeholder="Track Length"  autofocus name="lengths[]">
              <label for="length">Track Length</label>
            </div>
          </div>
        </div> 
      
      <button class="btn btn-primary spectrum-background reg-button" type="submit"><span class="regi-span">Monkiefy</span> these tracks</button>
    </form>
  </div>
</div>

<?php
// Inkludera en gemensam footer-template (som alla sidor i denna appen inkluderar)
require("templates/footer.php");
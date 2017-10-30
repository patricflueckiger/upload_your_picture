<div class="pt-5" style="background-color:#d0e4f7;height:100%;width:auto;border-radius:5px;">
  <div class="container">
    <h4 id="fehler-meldung" style="color:red;">
    <?php
    if(isset($_GET['error'])){
    ?>
    <?php
    switch ($_GET['error']) {
      default:
        echo "Alle Felder müssen ausgefüllt sein!";
        break;
    }  ?></h4>
    <?php
  }
    ?>
    <h3 class="text-center">Bild Bearbeiten</h3>
    <div class="mx-auto" style="height:400px;width:400px;">
      <img src="<?php echo $bild->picture_pfad?>" alt="bild" style="height:400px;width:400px">
    </div>
    <form action="/Bilder/Update" method="post">
    <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $bild->id?>">

    <div class="form-group" style="float:left; width: 50%">
      <label for="inputTitel">Titel:</label>
      <input type="text" name="inputTitel" id="inputTitel" placeholder="Titel" class="form-control input" value="<?php echo $bild->titel?>" required>
    </div>

    <div class="form-group" style="display:inline-block; width: 50%;">
      <label for="inputOrt">Ort:</label>
      <input type="text" name="inputOrt" id="inputOrt" placeholder="Ort" class="form-control input" value="<?php echo $bild->ort?>" required>
    </div>

    <div >
      <label for="inputBeschreib">Beschreibung:</label><br>
      <textarea rows="5" cols="40" name="inputBeschreib"   id="inputBeschreib" class="form-control input" required><?php echo $bild->beschreibung?></textarea>
    </div>

    <div class="form-check mt-2">
      <label class="form-check-label">
        <?php
          if ($bild->favorit == 1) {
        ?>
          <input class="form-check-input" name="inputFavorit" type="checkbox" value="" checked>
        <?php
        } else {
        ?>
        <input class="form-check-input" name="inputFavorit" type="checkbox" value="">

      <?php
      }
      ?>
        Als Favorit markieren.
      </label>
    </div>

    <div class="form-group mt-2">
      <div class="row">
        <div class="col-lg-6">
          <!-- $_SERVER['HTTP_REFERER']; für den letzt aufgerufe URL zu getten -->
          <a class="btn btn-secondary" href="<?php echo $_SERVER['HTTP_REFERER']; ?>" role="button">Zurück</a>
          <input type="submit" onclick="validateInput()" name="inputButton" id="inputButton" value="Speichern" class="btn btn-primary">
        </div>
        <div class="col-lg-6">
          <div class="text-right">
            <a class="btn btn-danger" href="/Bilder/Delete?id=<?php echo $bild->id?>&path=<?php echo $bild->picture_pfad?>" role="button">Löschen</a>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>

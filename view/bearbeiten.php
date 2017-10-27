<div class="pt-5" style="background-color:#d0e4f7;height:100%;width:auto;border-radius:5px;">
  <div class="container">
    <h3 class="text-center">Bild Bearbeiten</h3>
    <div class="mx-auto" style="height:400px;width:400px;">
      <img src="<?php echo $bild->picture_pfad?>" alt="bild"style="height:400px;width:400px">
    </div>
    <form action="/Bilder/Update" method="post">
    <input type="hidden" name="id" id="inputTitel" placeholder="Titel" class="form-control" value="<?php echo $bild->id?>" required>

    <div class="form-group" style="float:left; width: 50%">
      <label for="inputTitel">Titel:</label>
      <input type="text" name="inputTitel" id="inputTitel" placeholder="Titel" class="form-control" value="<?php echo $bild->titel?>" required>
    </div>

    <div class="form-group" style="display:inline-block; width: 50%;">
      <label for="inputOrt">Ort:</label>
      <input type="text" name="inputOrt" id="inputOrt" placeholder="Ort" class="form-control" value="<?php echo $bild->ort?>" required>
    </div>

    <div >
      <label for="inputBeschreib">Beschreibung:</label></br>
      <textarea rows="5" cols="40" name="inputBeschreib"   id="inputBeschreib" class="form-control" required><?php echo $bild->beschreibung?></textarea>
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
      <input type="submit" name="inputButton" id="inputButton" value="Bestätigen" class="btn btn-primary" required>
    <a class="btn btn-danger" href="/Bilder/Delete?id=<?php echo $bild->id?>" role="button">Löschen</a>
    </div>

    </form>
  </div>
</div>

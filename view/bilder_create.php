
<div class="pt-5" style="background-color:#d0e4f7;height:100%;width:auto;border-radius:5px;">
  <div class="container">
    <div class="container">
      <h4 id="fehler-meldung" style="color:red;">
      <?php
      //GET Request überprüfen, ob ein Error vorhanden ist
      if(isset($_GET['error'])){
      ?>
      <?php
      //Überprüfen, welcher Error anliegt
      switch ($_GET['error']) {
        case 'dateityp':
          echo "Benutzen Sie einen zulässigen Dateityp! (png, jpg, jpeg)";
          break;
      //Falls der Error nicht speziell behandelt werden muss den Default ausgeben
        default:
          echo "Alle Felder müssen ausgefüllt sein!";
          break;
      }  ?></h4>
      <?php
      }
      ?>
      <h1>Lade dein Bild Hoch</h1>
      <form action="/Bilder/doCreate" method="post" enctype="multipart/form-data">
      <div class="form-group" style="float:left; width: 50%">
        <label for="inputTitel">Titel:</label>
        <input type="text" name="inputTitel" id="inputTitel" placeholder="Titel" class="form-control input" required>
      </div>

      <div class="form-group" style="display:inline-block; width: 50%;">
        <label for="inputOrt">Ort:</label>
        <input type="text" name="inputOrt" id="inputOrt" placeholder="Ort" class="form-control input" required>
      </div>

      <div >
        <label for="inputBeschreib">Beschreibung:</label><br>
        <textarea rows="5" cols="40" name="inputBeschreib"   id="inputBeschreib" placeholder="Beischreibe kurz dein Bild" class="form-control input" required></textarea>
      </div>

      <div class="form-group">
        <label for="inputBild">Bild auswählen:</label><br>
        <input type="file" accept="image/*" name="inputBild" id="inputBild" class="btn btn-primary file-input input" required>
      </div>

      <div class="form-check">
        <label class="form-check-label">
          <input id="favorit" name="inputFavorit" class="form-check-input" type="checkbox">
          Als Favorit markieren.
        </label>
      </div>

      <div class="form-group">
        <input type="submit" name="inputButton" onclick="validateInput()" id="inputButton" value="Speichern" class="btn btn-primary">
      </div>
      </form>
    </div>
  </div>
</div>


<div class="pt-5" style="background-color:#d0e4f7;height:100%;width:auto;border-radius:5px;">
  <div class="container">
<h1>Füge dein Bild ein</h1>

<form action="/Bilder/doCreate" method="post" enctype="multipart/form-data">
<div class="form-group" style="float:left; width: 50%">
  <label for="inputTitel">Titel:</label>
  <input type="text" name="inputTitel" id="inputTitel" placeholder="Titel" class="form-control" required>
</div>

<div class="form-group" style="display:inline-block; width: 50%;">
  <label for="inputOrt">Ort:</label>
  <input type="text" name="inputOrt" id="inputOrt" placeholder="Ort" class="form-control" required>
</div>

<div >
  <label for="inputBeschreib">Beschreibung:</label></br>
  <textarea rows="5" cols="40" name="inputBeschreib"   id="inputBeschreib" class="form-control" required></textarea>
</div>

<div class="form-group">
  <label for="inputBild">Bild auswählen:</label></br>
  <input type="file" accept=".jpg" name="inputBild" id="inputBild" class="btn btn-primary" required>
</div>

<div class="form-check">
  <label class="form-check-label">
    <input name="favorit" id="" class="form-check-input" type="checkbox" value="">
    Als Favorit markieren.
  </label>
</div>


<div class="form-group">
  <input type="submit" name="inputButton" id="inputButton" value="Bestätigen" class="btn btn-primary" required>
</div>

</form>
</div>
</div>

<?php


 ?>

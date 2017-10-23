<h1>Füge dein Bild ein</h1>

<form action="/Bilder/doCreate" method="post" enctype="multipart/form-data">
<div class="form-group">
  <label for="inputTitel">Titel:</label>
  <input type="text" name="inputTitel" id="inputTitel" placeholder="Titel" class="form-control">
</div>

<div class="form-group">
  <label for="inputOrt">Ort:</label>
  <input type="text" name="inputOrt" id="inputOrt" placeholder="Ort" class="form-control">
</div>
<div class="form-group">
  <label for="inputBeschreib">Beschreibung:</label>
</br>
  <input type="text" name="inputBeschreib" id="inputBeschreib" class="form-control">
</div>

<div class="form-group">
  <label for="inputBild">Bild auswählen:</label>
  <input type="file" name="inputBild" id="inputBild" class="btn btn-primary">
</div>



<div class="form-group">
  <input type="submit" name="inputButton" id="inputButton" value="Bestätigen" class="btn btn-primary">
</div>

</form>

<?php


 ?>

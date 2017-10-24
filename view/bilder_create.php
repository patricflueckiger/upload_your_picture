<h1>Füge dein Bild ein</h1>

<form action="/Bilder/doCreate" method="post" enctype="multipart/form-data">
<div class="form-group" style="float:left">
  <label for="inputTitel">Titel:</label>
  <input type="text" name="inputTitel" id="inputTitel" placeholder="Titel" class="form-control">
</div>

<div class="form-group" style="float:right">
  <label for="inputOrt">Ort:</label>
  <input type="text" name="inputOrt" id="inputOrt" placeholder="Ort" class="form-control">
</div>
<div class="form-group">
  <label for="inputBeschreib">Beschreibung:</label>
<textarea rows="5" cols="40" name="inputBeschreib"   id="inputBeschreib" class="form-control">
</textarea>

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

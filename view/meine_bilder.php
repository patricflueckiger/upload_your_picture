<div class="pt-5" style="background-color:#d0e4f7;height:100%;width:auto;border-radius:5px;">

    <div class="cotainer">
      <h3 class="text-center">Meine Bilder</h3>
      <div class="row" style="padding-left:100px;">
      <?php
      //überprüfen ob schon Bilder zum anzeigen verügbar sind
        if (empty($bilder)) {
      ?>
      <div class="col-lg-12 p-5" style="padding-left:320px;"></div>
      <div class="col-lg-12" style="padding-left:320px;">
        <h3>Es gibt noch keine Bilder</h3>
        <h3>Lade ein Bild Hoch</h3>
        <div class="text-center mt-5" style="width:100px;margin-left:105px;">
          <a class="btn btn-primary pagination-centered btn-lg mb-3" href="/Bilder/create" role="button">Upload</a>
        </div>
      </div>
      <?php
    }// Wenn Bilder vorhanden sind diese anzeigen
      else {
        for ($i=count($bilder); $i > 0; $i--) {
      ?>
        <!--Daten in das Formular laden -->
      <div class='col-sm-6 mb-5 mt-5'>
          <div class='bild-container'>
            <h3><?php echo $bilder[$i - 1]->titel?></h3>
            <div class="beschreibung mb-2">
              <p class="m-0"><u>Beschreibung:</u></p>
              <p><?php echo $bilder[$i -1]->beschreibung?></p>
              <p class="m-0"><u>Ort:</u></p>
              <p><?php echo $bilder[$i -1]->ort?></p>

            </div> <!-- Bild reinladen-->
            <img src="<?php echo $bilder[$i - 1]->picture_pfad?>" alt='bild' style='height:400px;width:400px;border:2px solid #c0cad4;border-radius:5px;'>
            <p class="m-0"><u>Datum:</u></p>
            <p><?php echo $bilder[$i -1]->datum?></p>
            <a class="btn btn-primary mt-2" href="/Bilder/Edit?id=<?php echo $bilder[$i - 1]->id?>" role="button">Bearbeiten</a>
          </div>
      </div>
      <?php
        }
      }
    ?>
    </div>
  </div>
</div>

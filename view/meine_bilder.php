<div class="pt-5" style="background-color:#d0e4f7;height:100%;width:auto;border-radius:5px;">

    <div class="cotainer">
      <h3 class="text-center">Meine Bilder</h3>
      <div class="row" style="padding-left:100px;">
      <?php
        for ($i=count($bilder); $i > 0; $i--) {
      ?>
      <div class='col-sm-6 mb-5 mt-5'>
          <div class='bild-container'>
            <h3><?php echo $bilder[$i - 1]->titel?></h3>
            <div class="beschreibung mb-2">
              <p class="m-0"><u>Beschreibung:</u></p>
              <p><?php echo $bilder[$i -1]->beschreibung?></p>
            </div>
            <img src="<?php echo $bilder[$i - 1]->picture_pfad?>" alt='bild' style='height:400px;width:400px;border:2px solid #c0cad4;border-radius:5px;'>
            <a class="btn btn-primary mt-2" href="/Bearbeiten?id<?php echo $bilder[$i - 1]->id?>" role="button">Bearbeiten</a>
          </div>
      </div>
      <?php
      }
    ?>
    </div>
  </div>
</div>

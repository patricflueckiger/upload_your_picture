<div class="pt-5" style="background-color:#d0e4f7;height:100%;width:auto;border-radius:5px;">

    <div class="cotainer">
      <h3 class="text-center">Meine Bilder</h3>
      <div class="row" style="padding-left:150px;">
      <?php
        for ($i=count($bilder); $i > 0; $i--) {
          if ($bilder[$i - 1]->favorit == 1) {


      ?>
      <div class='col-sm-6 mb-5 mt-5'>
          <div class='bild-container' style='width:320px;height:320px;'>
            <h3><?php echo $bilder[$i - 1]->titel?></h3>
            <a class="btn btn-primary" href="" role="button">Bearbeiten</a>
            <img src="<?php echo $bilder[$i - 1]->picture_pfad?>" alt='bild' style='height:100%;width:100%;border:2px solid #c0cad4;border-radius:5px;'>
          </div>
      </div>

      <?php
        }
      }
    ?>
    </div>
  </div>
</div>

<div class="pt-5" style="background-color:#d0e4f7;height:100%;width:auto;border-radius:5px;">

    <div class="cotainer">
      <h3 class="text-center mb-5">Meine Bilder</h3>
      <div class="row" style="padding-left:90px;">
      <?php
        for ($i=0; $i < count($bilder); $i++) {
      ?>
      <div class='col-sm-6'>
          <div class='bild-container' style='width:320px;height:320px;'>
            <h3><?php echo $bilder[$i]->titel?></h3>
            <img src="../public/images/pexels-photo-226243.jpeg" alt='bild' style='height:100%;width:100%;border:2px solid #c0cad4;border-radius:5px;'>
          </div>
      </div>

      <?php
      }
    ?>
    </div>
  </div>
</div>

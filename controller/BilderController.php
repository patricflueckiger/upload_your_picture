<?php

require_once '../repository/BilderRepository.php';

class BilderController {

  public function index()
  {
      // In diesem Fall möchten wir dem Benutzer die View mit dem Namen
      //   "default_index" rendern. Wie das genau funktioniert, ist in der
      //   View Klasse beschrieben.
      $bildRepository = new BilderRepository();

      $view = new View('meine_bilder');
      $view->title = 'Meine Bilder';
      $view->heading = 'Meine Bilder';
      $view->bilder = $bildRepository->readAll();
      $view->display();
  }

    public function create()
    {
        $view = new View('bilder_create');
        $view->title = 'Bild erstellen';
        $view->heading = 'Bild erstellen';
        $view->display();
    }

  public function doCreate()
    {
            $bildRepository = new BilderRepository();
            $inputTitel = ($_POST['inputTitel']);
            $inputOrt = ($_POST['inputOrt']);
            $inputBeschreib = ($_POST['inputBeschreib']);
            $inputBild = ($_FILES['inputBild']);



            $newFileName = $inputTitel.date("d-m-Y");
            $filePath = "upload/".$newFileName.".jpg";
            move_uploaded_file($_FILES['inputBild']['tmp_name'], $filePath);

            $bildRepository->create($inputTitel, $inputOrt, $inputBeschreib, $filePath);



        // Anfrage an die URI /Bilder weiterleiten (HTTP 302)
        //header('Location: /Bilder');
    }

}
?>

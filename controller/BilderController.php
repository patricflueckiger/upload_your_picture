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
            $inputTitel = htmlspecialchars($_POST['inputTitel']);
            $inputOrt = htmlspecialchars($_POST['inputOrt']);
            $inputBeschreib = htmlspecialchars($_POST['inputBeschreib']);
            $inputBild = $_FILES['inputBild'];


            $error = false;
            $error_text = "";


            if(empty($inputTitel)){
              $error = true;
              $error_text = "Leerer Titel!<br>";
            }

            else if(empty($inputOrt)){
              $error = true;
              $error_text = "Leerer Ort!<br>";
            }

            else if(empty($inputBeschreib)){
              $error = true;
              $error_text = "Leerer Beschreib!<br>";
            }

            else if(empty($inputBild)){
              echo "füge ein Bild ein";
              $error = true;
              $error_text .= "Kein Bild!<br>";
            }
            else {

              $newFileName = $inputTitel.date("d-m-Y");
              $newFileName = str_replace(' ','_',$newFileName);
              $filePath = "upload/".$newFileName.".jpg";

              move_uploaded_file($_FILES['inputBild']['tmp_name'], $filePath);

              $bildRepository->create($inputTitel, $inputOrt, $inputBeschreib, $filePath, $inputFavorit);


            }



        if($error){
            echo $error_text."</br> Pfusch nicht im HMTL rum!";
        }
        else{
          // Anfrage an die URI /Bilder weiterleiten (HTTP 302)
          //header('Location: /Bilder');
        }
    }

    function edit() {
      $bildRepository = new BilderRepository();
      $id = $_GET['id'];
      $view = new View('bearbeiten');
      $view->title = 'Bild bearbeiten';
      $view->bild = $bildRepository->readById($id);
      $view->display();
    }

    function favoriten(){
      $bildRepository = new BilderRepository();
      $view = new View('meine_favoriten');
      $view->title = 'Favoriten';
      $bildRepository->readAllFavorit();
      $view->display();

    }

    function update() {
      $id = $_POST['id'];
      $titel = $_POST['inputTitel'];
      $ort = $_POST['inputOrt'];
      $beschreibung = $_POST['inputBeschreib'];
      $favorit = $_POST['inputBeschreib'];

      $bildRepository = new BilderRepository();
      $view = new View('meine_bilder');
      $view->title = 'Meine Bilder';
      $bildRepository->update($id, $titel, $ort, $beschreibung, $favorit);
      $view->bilder = $bildRepository->readAll();
      $view->display();
    }

}
?>

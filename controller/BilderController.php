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
            $allowed =  array('jpg','png','jpeg');
            $fileType = split('/',$_FILES['inputBild']['type']);
            $filename = $_FILES['inputBild']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);


            //Checkbox wert abfangen
            if (isset($_POST['inputFavorit'])) {
              $inputFavorit = 1;
              echo $inputFavorit;
            } else {
              $inputFavorit = 0;
              echo $inputFavorit;
            }


            $error = false;
            $error_text = "";


            if(empty($inputTitel)){
              $error = true;
              $error_text = "titel";
            }

            else if(empty($inputOrt)){
              $error = true;
              $error_text = "ort";
            }

            else if(empty($inputBeschreib)){
              $error = true;
              $error_text = "beschrieb";
            }

            else if(empty($inputBild)){
              $error = true;
              $error_text = "bild";
            }
            else if(!in_array($ext,$allowed)) {
              $error = true;
              $error_text = "dateityp";
            }
            else {
              //Files hochladen und in Ordner Upload verschieben.
              $newFileName = $inputTitel.date("d-m-Y");
              $newFileName = str_replace(' ','_',$newFileName);
              $filePath = "/"."upload/".$newFileName.".".$fileType[1];
              move_uploaded_file($_FILES['inputBild']['tmp_name'],"upload/$newFileName".".".$fileType[1]);

              $bildRepository->create($inputTitel, $inputOrt, $inputBeschreib, $filePath, $inputFavorit);

            }



            if(!$error){
          // Anfrage an die URI /Bilder weiterleiten (HTTP 302)
          header('Location: /Bilder');
          }
          else{
          header('Location: /Bilder/create?error='.$error_text);
        }

    }

    public function edit() {
      $bildRepository = new BilderRepository();
      $id = $_GET['id'];
      $view = new View('bearbeiten');
      $view->title = 'Bild bearbeiten';
      $view->bild = $bildRepository->readById($id);
      $view->display();
    }

    public function favoriten(){
      $bildRepository = new BilderRepository();
      $view = new View('meine_favoriten');
      $view->title = 'Favoriten';
      $view->bilder = $bildRepository->readAllFavorit();
      $view->display();

    }

    public function update() {
      $bildRepository = new BilderRepository();
      $id = htmlspecialchars($_POST['id']);
      $titel = htmlspecialchars($_POST['inputTitel']);
      $ort = htmlspecialchars($_POST['inputOrt']);
      $beschreibung = htmlspecialchars($_POST['inputBeschreib']);

      //Checkbox wert abfangen
      if (isset($_POST['inputFavorit'])) {
        $inputFavorit = 1;
        echo $inputFavorit;
      } else {
        $inputFavorit = 0;
        echo $inputFavorit;
      }

      //$view = new View('meine_bilder');
      //$view->title = 'Meine Bilder';
      $bildRepository->update($id, $titel, $ort, $beschreibung, $inputFavorit);
      //$view->bilder = $bildRepository->readAll();
      //$view->display();

      // Anfrage an die URI /Bilder weiterleiten (HTTP 302)
      header('Location: /Bilder');
    }

    public function delete() {
      $bildRepository = new BilderRepository();

      $id = $_GET['id'];
      $path = trim($_GET['path'], '/');

      $bildRepository->deleteById($id);

      //Bild wird auch im verzeichnis gelöscht
      chown($path, 666); //Owner wird auf einen Invaliden user gesetzt, um kein user als owner zu haben

      if (unlink($path)) {
          echo 'success: file was deleted';
      } else {
          echo 'fail: could not delete file';
      }

      // Anfrage an die URI /Bilder weiterleiten (HTTP 302)
      header('Location: /Bilder');
    }

}
?>

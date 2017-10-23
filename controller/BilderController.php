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
}
?>

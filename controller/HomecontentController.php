<?php
class HomecontentController{

  public function index()
  {
      // In diesem Fall möchten wir dem Benutzer die View mit dem Namen
      //   "default_index" rendern. Wie das genau funktioniert, ist in der
      //   View Klasse beschrieben.
      $view = new View('homecontent');
      $view->title = 'Startseite';
    
      $view->display();
  }
}
?>

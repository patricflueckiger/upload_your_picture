<?php

require_once '../lib/Repository.php';

/**
 * Das UserRepository ist zuständig für alle Zugriffe auf die Tabelle "user".
 *
 * Die Ausführliche Dokumentation zu Repositories findest du in der Repository Klasse.
 */
class BilderRepository extends Repository
{
    /**
     * Diese Variable wird von der Klasse Repository verwendet, um generische
     * Funktionen zur Verfügung zu stellen.
     */
    protected $tableName = 'bild';

    /**
     * Erstellt einen neuen benutzer mit den gegebenen Werten.
     *
     * Das Passwort wird vor dem ausführen des Queries noch mit dem SHA1
     *  Algorythmus gehashed.
     *
     * @param $firstName Wert für die Spalte firstName
     * @param $lastName Wert für die Spalte lastName
     * @param $email Wert für die Spalte email
     * @param $password Wert für die Spalte password
     *
     * @throws Exception falls das Ausführen des Statements fehlschlägt
     */
     //Create Methode
     public function create($inputTitel, $inputOrt, $inputBeschreib, $filePath, $inputFavorit)
     {
         //Speichere Datum in eine Variable und erstelle den Insert Befehl
         $date = date("Y-m-d");
         $query = "INSERT INTO $this->tableName (titel, ort, beschreibung, picture_pfad, favorit, datum) VALUES (?, ?, ?, ?, ?, ?)";
         //prepare stament gegen SQL-Injection
         $statement = ConnectionHandler::getConnection()->prepare($query);
         if($statement === false)
            die(ConnectionHandler::getConnection()->error);
         $statement->bind_param('ssssis', $inputTitel, $inputOrt, $inputBeschreib, $filePath, $inputFavorit, $date);
         //exception abfangen
         if (!$statement->execute()) {
             throw new Exception($statement->error);
         }

         return $statement->insert_id;
     }

     //Update Methode
     public function update($id, $titel, $ort, $beschreibung, $favorit) {
       //query vorbereiten
       $query = "UPDATE {$this->tableName} SET titel=?, ort=?, beschreibung=?, favorit=? WHERE id=?";
       $statement = ConnectionHandler::getConnection()->prepare($query);
       if ($statement == false) {
         die(ConnectionHandler::getConnection()->error);
       }
       //Werte ins statement einlesen
       $statement->bind_param('sssii', $titel, $ort, $beschreibung, $favorit, $id);

       if (!$statement->execute()) {
           throw new Exception($statement->error);
       }
       //fertiges stament zurückgeben
       return $statement->insert_id;
     }
}

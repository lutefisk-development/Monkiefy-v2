<?php

class ArtistController {
  protected $dbh;

  public function __construct(){
    // connect to db via pdo
    // get db handle
    $this->dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USERNAME, DB_PASSWORD);
  }

  public function createArtist($name, $birthday){
    $query = $this->dbh->prepare("INSERT INTO artists (name, birthday) VALUES (:name, :birthday)");
		$query->bindParam(':name', $name);
		$query->bindParam(':birthday', $birthday);
		return $query->execute();
  }

  public function getArtists(){
    $query = $this->dbh->prepare("SELECT * FROM artists");
    $query->execute();

    return $query->fetchAll(PDO::FETCH_CLASS, 'Artist');
  }
}
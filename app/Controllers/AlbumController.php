<?php

class AlbumController {
  protected $dbh;

  public function __construct(){
    // connect to db via pdo
    // get db handle
    $this->dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USERNAME, DB_PASSWORD);
  }

  public function createAlbum($id, $name, $genre){
    $query = $this->dbh->prepare("INSERT INTO albums (artist_id, name, genre) VALUES (:artist_id, :name, :genre)");
    $query->bindParam(':artist_id', $id);
    $query->bindParam(':name', $name);
		$query->bindParam(':genre', $genre);
		return $query->execute();
  }

  public function getAlbums($id){
    $query = $this->dbh->prepare("SELECT albums.id as albums_id, albums.artist_id, albums.name as albums_name, albums.genre, artists.id as artists_id, artists.name as artists_name, artists.birthday FROM albums JOIN artists ON artists.id = albums.artist_id WHERE artists.id = :id");
    $query->bindParam(':id', $id);
    $query->execute();

    return $query->fetchAll(PDO::FETCH_CLASS, 'Album');
  }
}
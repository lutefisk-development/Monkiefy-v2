<?php

class TrackController {
  protected $dbh;
  protected $albumId;

  public function __construct(){
    // connect to db via pdo
    // get db handle
    $this->dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USERNAME, DB_PASSWORD);
  }

  public function createTracks($name, $length){
    $query = $this->dbh->prepare("INSERT INTO tracks (album_id, name, length) VALUES (:album_id, :name, :length)");
    $query->bindParam(':album_id', $this->albumId);
    $query->bindParam(':name', $name);
    $query->bindParam(':length', $length);
    return $query->execute();
  }

  public function setAlbumId($id){
    $this->albumId = $id;
  }

  public function getTracks($id){
    $query = $this->dbh->prepare("SELECT tracks.id as tracks_id, tracks.album_id, tracks.name as tracks_name, tracks.length, albums.id as albums_id, albums.artist_id, albums.name as albums_name, albums.genre FROM tracks JOIN albums ON albums.id = tracks.album_id WHERE tracks.album_id = :id");
    $query->bindParam(':id', $id);
    $query->execute();

    return $query->fetchAll(PDO::FETCH_CLASS, 'Track');
  }  
}
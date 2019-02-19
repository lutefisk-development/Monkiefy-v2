<?php

class Album {
  protected $artist_id;
  protected $genre;
  protected $id;
  protected $name;

  public function getArtistId(){
    return $this->artist_id;
  }
  
  public function getGenre(){
    return $this->genre;
  }

  public function getId(){
    return $this->id;
  }

  public function getName(){
    return $this->name;
  }
}

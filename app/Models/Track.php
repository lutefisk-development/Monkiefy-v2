<?php

class Track {
  protected $album_id;
  protected $id;
  protected $length;
  protected $name;

  public function getAlbumId(){
    return $this->album_id;
  }

  public function getId(){
    return $this->id;
  }

  public function getLength(){
    $number = (int)$this->length;
    $minutes = floor($number / 60);
    $seconds = $number % 60;
    
    if ($minutes > 0) {
      $minutes = "{$minutes} minutes";
    } else {
      $minutes = "";
    }
  
    if ($seconds > 0) {
      if ($minutes > 0) {
        $temp =  "and";
      }
      $seconds =  "{$seconds} seconds";
    }
    return $minutes . " " . $temp . " " . $seconds;
  }

  public function getName(){
    return $this->name;
  }
}
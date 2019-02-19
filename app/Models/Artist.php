<?php

class Artist {
  protected $birthday;
  protected $id;
  protected $name;

  public function getBirthday(){
    return $this->birthday;
  }

  public function getId(){
    return $this->id;
  }

  public function getName(){
    return $this->name;
  }
}
<?php

interface Category {}

class DramaCategory implements Category{

}

class ActionCategory implements Category{

}

class Move {
  public function __construct($name, Category $category) {
    $this->name;
    $this->category = $category;
  }

  private $name;
  private $category;

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getCategory() {
    return $this->category;
  }

  public function setCategory(Category $category) {
    $this->category = $category;
  }
}
<?php

abstract class Video {
  abstract public function calculaInteresse()
}

class Movie implements Video {
  public function calculaInteresse() {
    //calcula
  }
}

class TVShow implements Movie {
  public function calculaInteresse() {
    // calcula
  }
}
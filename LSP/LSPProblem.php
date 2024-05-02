<?php

class Movie {
  public function play() {
    //play no movie
  }

  public function increaseVolume() {
    //increase volume
  }
}

class TheLionKing implements Movie {}

class ModernTimes implements Movie {
  public function increaseVolume() {
    // nao tem increaseVolume já que o filme é mudo
  }
}
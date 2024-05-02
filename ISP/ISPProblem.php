<?php

class Movie {
  public function play() {
    //play no movie
  }

  public function increaseVolume() {
    //increase volume
  }
}

class TheLionKing implements Movie {
  public function play() {
    //play no movie
  }

  public function increaseVolume() {
    //increase volume
  }

}

class ModernTimes implements Movie {
  public function play() {
    //play no movie
  }
  public function increaseVolume() {
    // esse método não será utilizado, porém terá de ser implementado
  }
}
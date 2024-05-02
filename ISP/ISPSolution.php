<?php

class Movie {
  public function play() {
    //play no movie
  }
}

interface AudioControl {

  public function increaseVolume() {
    //increase volume
  }
}

class TheLionKing implements Movie, AudioControl {
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
}
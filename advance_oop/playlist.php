<?php 

 //create playlist class:
class Playlist {
    public $songs = [];
    // a method that adds songs to the $songs array:
    public function addSongToPlaylist($song){
        //add songs to song array:
        $this->songs[] = $song;
    }
}
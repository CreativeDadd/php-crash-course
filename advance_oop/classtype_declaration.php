<?php
//here we want to show how data type play a role in class:

include 'php_mvc_test.php'; //we utilize the Songs class here
include 'playlist.php';

//create new playlist object:
$playListObj = new Playlist();
//create new song object:
$song_1 = new Song('Tell Them', 345);
$song_1 = $song_1->name;
$song_2 = new Song('Loved Yesterday', 456);

//we want to add songs to playlist by using the addSongToPlaylist() method declared in the 'Playlist' class:
$playListObj->addSongToPlaylist($song_1);
$playListObj->addSongToPlaylist($song_2);
$song_arr = $playListObj->songs;

// var_dump($song_arr); 
echo '<br>';
     var_dump($song_arr);

foreach($song_arr as $song){

    echo $song->name . PHP_EOL;

}




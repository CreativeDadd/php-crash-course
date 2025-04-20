<?php
// we must have the session started whwereevre you want to use the session value
session_start();

if(isset($_SESSION['username'])){
    echo "<h1>Welcome" . $_SESSION['username']  . "</h1>";
    echo '<a href="/extras/logout.php">Log Out</a>';
} else{
    echo '<h1>Welcome Guest.</h1>';
    echo '<a href ="/session.php" >Login Or Sign Up</a>';
}

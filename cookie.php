<?php
/*

 ------------- COOKIE  --------------
 * cookies are a mechnism for storing dat in the remote browser and thus tracking or identifying returned users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
 
*/
//how to set cookie:
setcookie('name', 'Bola', time() + 86400 + 30);

echo $_COOKIE['name'];
//how to delete cookie:
setcookie('name', '', time() - 86400 * 30 );


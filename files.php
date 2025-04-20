<?php
/*  ---- FILE HANDLING ---- 

* File handling is the ability to write and read files on the server. 
*PHP has the inbuilt functionalities to do this.

*/

$files = 'extras/user.txt';
if(file_exists($files)){
    // echo readfile($files);
    $handle = fopen($files, 'r');
    $content = fread($handle, filesize($files));
    fclose($handle);
    echo nl2br(htmlspecialchars($content));
} else {
    $handle = fopen($files, 'w');
    $content = 'Mike' . PHP_EOL . 'Sara' . PHP_EOL  . 'Ibukun';
    fwrite($handle, $content);
    fclose($handle);
}









<?php
/*
-====== $_GET & $_POST Superglobals  =====-- 
* we can pass data through urls and forms using $_GET and $_POST superglobals;

*With GET you can pass data through both url and form
* With POST we can pass data through forms only.
*/

// lets use the $_GET superglobal to receive data from the url":
// if(isset($_POST['submit']))
// if(isset($_POST['submit'])){
    echo <<<EOT
    <h1>$_POST[username]</h1><br>
    <h1>$_POST[email]</h1>
    EOT; 

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Here, we will pass data through the url we wish -->
    <!-- <a href="/<?php //echo $_SERVER['PHP_SELF']; ?>?name=Bola&age=40">Click</a> -->
     <!-- using the $_POST superglobals  -->
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="username">User Name:</label>
            <input type="text" name="username">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="submit" value="submit">
      </form>
</body>
</html>



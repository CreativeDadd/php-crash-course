<?php
// if(isset($_POST['submit'])){
     //you can use this method of do
    $username = htmlspecialchars($_POST['username']) ;
    $email =htmlspecialchars($_POST['email']);
    echo $username;
    echo $email;
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

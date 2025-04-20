<?php 
// lets create the code for the file uploads:

    if(!empty($_FILES['upload']['name'])){
        $allowed_ext = array( 'png', 'jpg', 'jpeg', 'git');
        
        print_r($_FILES) . '<br>';
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp_name = $_FILES['upload']['tmp_name'];
        $file_type = $_FILES['upload']['type']; 
        $file_full_path = $_FILES['upload']['full_path']; 


        $target_dir = "uploads/$file_name";

        // get the file extention of the uploaded file

        $file_ext = explode('.', $file_name);
       $file_ext = strtolower(end($file_ext));
       //check if the the allowed file extention exist by echoing it thus:
       #echo $file_ext:
       if(in_array($file_ext, $allowed_ext)){
        if($file_size <= 60000){
            move_uploaded_file($file_tmp_name, $target_dir);
            echo $file_full_path;
            $message = '<p style="color: green;">file Uploaded Successfully.</p>';

        } else{
            $message = '<p style="color: red;">file size too large</p>';
        }

       }else {

        $message = '<p style="color: red;">Invalid file type</p>';
       }


    } else{
        $message = '<p style="color:red">Please Choose a File</p>';
    }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploadin</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
        Please choose a file: <br>
        <input type="file" name="upload"> <br>
        
        <input type="submit" value="sumit" name="sumit">
    </form>
    
</body>
</html>
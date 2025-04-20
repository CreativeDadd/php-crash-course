
<?php   
function inverse($x){
    if(!$x){
        throw new Exception('Division by zero error.');
    }
    return 1/$x;
}

try{
    echo inverse(5);
    echo inverse(0);
} catch(Exception $e){
    echo 'cought Exception:' . $e->getMessage();
} finally{

    echo 'Final hello';
}

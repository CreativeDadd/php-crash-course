
<?php
// super globals are built-in variables that are alway available in all scopes: e.g 

//$_GET - contains information passed to  a url or a form

//$_POST - contains information about variable passed thrpoigh a form

//$_COOKIE - conotains information about variables passed throught cookie.

//$_SESSION - contains info about variables passed through a session;

//$_SERVER - CONTAINS info about the server environment;

//$_ENV - contains information about the environment variables ;

//$_FILES - contains info about files uploaded to the script.

//$_REQUEST - contains info about variable passed through the form or url;

print_r($_SERVER['HTTP_HOST']);
echo "<br>";
print_r($_SERVER['SERVER_SOFTWARE']);
echo "<br>";
print_r($_SERVER['HTTP_USER_AGENT']);
echo "<br>";
print_r($_SERVER['REQUEST_URL']);
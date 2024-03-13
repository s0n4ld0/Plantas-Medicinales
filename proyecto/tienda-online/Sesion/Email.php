
<?php

session_start();

if(!$_SESSION['Id'])
{
    http_response_code(400);
}

?>
<?php 

 header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    
session_start(); //to ensure you are using same session
session_destroy(); //destroy the session

header("location:index.html"); //to redirect back to "index.php" after logging out
exit();

/*
if(!session_is_registered('username')){
        $loginMessage = 'You have been logged out.';
        include 'index.html';
        exit();
    }

*/


 ?>
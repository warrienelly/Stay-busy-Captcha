<?php
session_start();


 
//
if(isset($_POST['submit']))
{ 
    if (empty($_SESSION['captcha']) || strcasecmp($_SESSION['captcha'], $_POST['text']) != 0) 
    {
        header('location:fail.php');  
    }
    else{
          header('location:sucess.php'); 
    }
    
}


?>


<?php 

 $past = time() - 100; 

 //this makes the time in the past to destroy the cookie 
 setcookie(ID_my_site, "", $past); 
 setcookie(Key_my_site, "", $past); 
 setcookie(current_user_id, "", $past);

 header("Location: login.php"); 

 ?> 


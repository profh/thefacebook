<?php
 $past = time() - 100;

 //this makes the time in the past to destroy the cookie
 setcookie("id_my_site", "", $past);
 setcookie("key_my_site", "", $past);
 setcookie("current_user_id", "", $past);

 header("Location: login.php");
 exit;
?>


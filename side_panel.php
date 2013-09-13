<div id="side_panel">

<?php
$user_id  = (!empty($_GET['uid'])) ? $_GET['uid'] : $_COOKIE['current_user_id'];

echo "
<div id=\"side_links\">

<a href=\"profile.php?uid=$user_id\"> My Profile </a> <a href=\"profile.php?uid=$user_id&edit=true\"> [ edit ] </a><br />
<a href=\"construction.php\"> My Groups </a> <br />
<a href=\"construction.php\"> My Friends </a><br />
<a href=\"construction.php\"> My Messages </a><br />
<a href=\"construction.php\"> My Away Messages </a> <br />
<a href=\"construction.php\"> My Mobile Info </a> <br />
<a href=\"construction.php\"> My Account </a> <br />
<a href=\"construction.php\"> My Privacy </a> <br />

</div>";
?>

</div>

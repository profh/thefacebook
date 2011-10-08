<?php
	include 'head_data.php';
?>

 <body>
<?php
	include("db_connect.php");
	mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
	mysql_select_db($dbname) or die(mysql_error());
	$isyou = "";
	if(isset($_GET['uid']))
	{
	  $user_id = $_GET['uid'];
	}
	else
	{
		if (isset($_POST['submit'])) {
			$user_id = $_COOKIE['current_user_id'];
		}
		else {
			die("Please specify a user");
		}
	}
	$qtext = "SELECT * FROM users WHERE id = $user_id";
	$query = mysql_query($qtext) or die(mysql_error());
	$info = mysql_fetch_array($query);


	$plural = "";
	if ($info['name'][strlen($info['name'])-1] == 's')
	{
	  $plural = '\'';
	}
	else
	{
	  $plural = '\'s';
	}

	$edit = false;
	//Editing the profile
	if(isset($_GET['edit']))
	{
	  $edit = true;
	}

	echo '<div id ="content">';
		include 'online_header.php';
	  include 'side_panel.php';
	  include 'profile_box.php'; 
	  include 'footer.php';
	echo '</div>';
?>
  </body>
</html>

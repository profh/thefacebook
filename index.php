<?php
	include 'head_data.php';
?>

  <body>
<?php
	echo '<div id ="content">';
	if (isset($_COOKIE['current_user_id'])) {	
		include 'online_header.php';
	  include 'side_panel.php';
	  include 'profile_box.php'; 
	  include 'footer.php';
	}
	else {
		include 'header.php';
		include 'welcome_box.php';
	  include 'footer.php';
	}

	echo '</div>';
?>
  </body>
</html>

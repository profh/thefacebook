<?php
	include("quick_data.php");
?>

<div id = "profile_box">
<div style="background-color: #4C70A0; color: white;"> <?php echo $info['name'].$plural; ?> Profile
  <?php echo $isyou;?></div>


<div id = "profile_left_side">
<?php
include 'picture_box.php';
include 'preferences_box.php';
include 'connection_box.php';
include 'access_box.php';
?>
</div>

<?php
  if ($edit == false)
  {
    include 'information_box.php';
  }
  else
  {
    include 'information_box_edit.php';
  }
?>
</div>


<?php
	// If the user is revising information, process it
  if (isset($_POST['submit']))
  {
    $update = "
    UPDATE users 
    SET 
      status = '".$_POST['status']."',
      sex = '".$_POST['sex']."',
      year = '".$_POST['year']."',
      concentration = '".$_POST['concentration']."',
      screenname = '".$_POST['screenname']."',
      looking_for = '".$_POST['looking_for']."',
      interested_in = '".$_POST['interested_in']."',
      relationship = '".$_POST['relationship']."',
      political_view = '".$_POST['political_view']."',
      interests = '".$_POST['interests']."'
    WHERE id = $user_id";
    $update_member = mysql_query($update);

		// reset values in info hash
		$qtext = "SELECT * FROM users WHERE id = $user_id";
		$query = mysql_query($qtext) or die(mysql_error());
		$info = mysql_fetch_array($query);
  }
	else {
		include("quick_data.php");
	}


?>
<div id="information_box">
<div style="background-color: #4C70A0; color: white">
<table style="border-collapse: collapse; width: 100%;">
  <tr>
   <td>Information</td>
   <?php
    if ($user_id == $_COOKIE['current_user_id'])
    {
      ?>
       <td id ="fb_link" style="text-align: right;">
         <a href="profile.php?uid=<?php echo "$user_id";?>&edit=true"> [ edit ] </a></td>
      <?php
    }
    else
    {
      ?>
      <td>&nbsp;</td>
      <?php
    }
   ?>
  </tr>
</table>
</div>
<table>
  <th>Account Info:</th>
    <tr>
     <td>Name:</td>
     <td><?php echo $info['name']; ?></td>
    </tr>
    <tr>
     <td>Member Since:</td>
     <?php $better_time = date("F j, Y",strtotime($info['member_since']));?>
     <td><?php echo $better_time; ?></td>
    </tr>
</table>
<table>  
  <th>Basic Info:</th>
    <tr>
     <td>Email:</td>
     <td><?php echo $info['email'] ?></td>
    </tr>
    <tr>
     <td>Status:</td>
     <td><?php echo $info['status'] ?></td>
    </tr>
    <tr>
     <td>Sex:</td>
     <td><?php echo $info['sex'] ?></td>
    </tr>
    <tr>
     <td>Year:</td>
     <td><?php echo $info['year'] ?></td>
    </tr>
    <tr>
     <td>Concentation:</td>
     <td><?php echo $info['concentration'] ?></td>
    </tr>
    </tr>
</table>
<table>
 <th>Extended Info:</th>   
    <tr>
     <td>Screenname:</td>
     <td><?php echo $info['screenname'] ?></td>
    </tr>
    <tr>
     <td>Looking For:</td>
     <td><?php echo $info['looking_for'] ?></td>
    </tr>
    <tr>
     <td>Interested In:</td>
     <td><?php echo $info['interested_in'] ?></td>
    </tr>
    <tr>
     <td>Relationship Status:</td>
     <td><?php echo $info['relationship'] ?></td>
    </tr>
    <tr>
     <td>Political Views:</td>
     <td><?php echo $info['political_view'] ?></td>
    </tr>
    <tr>
     <td>Interests:</td>
     <td><?php echo $info['interests'] ?></td>
    </tr>
</table>
</div>





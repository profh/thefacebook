<?php
  //Connects to your Database 
	include("db_connect.php");
  mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
  mysql_select_db($database) or die(mysql_error()); 
?>

<?php
  //This code runs if the form has been submitted
  if (isset($_POST['submit'])) 
  { 
    if (!$_POST['email'] || !$_POST['pass'] || !$_POST['pass2'] ) 
    {
      die('You did not complete all of the required fields');
 	  }
    // checks if the email is in use
 	  if (!get_magic_quotes_gpc()) 
    {
 		  $_POST['email'] = addslashes($_POST['email']);
 	  }

    $usercheck = $_POST['email'];
    $check = mysql_query("SELECT email FROM users WHERE email = '$usercheck'") or
      die(mysql_error());
    $check2 = mysql_num_rows($check);

    //if the email is already taken, give an error!
    if ($check2 != 0)
    {
      die('Sorry, the email '.$_POST['email'].' is already in use.');
    }
  
    // this makes sure both passwords entered match
 	  if ($_POST['pass'] != $_POST['pass2'])
    {
      die('Your passwords did not match. ');
 	  }
 	  // here we encrypt the password and add slashes if needed
 	  // $_POST['pass'] = md5($_POST['pass']);

 	  if (!get_magic_quotes_gpc()) 
    {
 	  	$_POST['pass'] = addslashes($_POST['pass']);
 		  $_POST['email'] = addslashes($_POST['email']);
    }

    // now we insert it into the database

 	  $insert = "
    INSERT INTO users 
      (email, name, status, password, member_since) 
    VALUES ('".$_POST['email']."', '".$_POST['name']."', '".$_POST['status']."', 
      '".$_POST['pass']."', CURDATE())";

 	  $add_member = mysql_query($insert);
  ?>
    <!-- Print out message Thanking user for successfully Registering-->
    <h1>Registered</h1>
    <p>Thank you, you have registered - you may now login</a>.</p>

  <?php 
  } //End of the if of when the user has submitted the form correctly  

  else 
  {

  ?>

<div id ="register_box">
  <div style = "background-color: #4C70A0; color: white;">Registration</div>
  <h1 style="text-align: center;">[ Register ]</h1>
  <p style="margin: auto; width: 90%;">
  <br />    
To register for thefacebook.com, just fill in the four fields below. You will have a chance to enter additional information and submit a picture once you have registered. 
  </p>

  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <table>
      <tr>
        <td> Name </td> 
        <td><input type ="text" name="name" /></td>
      </tr>
      <tr>
        <td> Status </td>
        <td> 
          <select name = "status">
            <option></option>
            <option value = "Student"> Student</option>
            <option value = "Alumnus"> Alumnus/Alumna</option>
            <option value = "Faculty"> Faculty</option>
            <option value = "Staff"> Staff</option>
          </select>
        </td>
      </tr>
      <tr>
        <td> Email: (CMU) </td>
        <td><input type="text" name="email" /></td>
      </tr>
      <tr>
        <td style="width: 150px;"> Password*: (not afs)</td> <td><input type="password" name ="pass" maxlegnth="10"></td>
      </tr>
      <tr>
        <td style="width: 150px;"> Confirm Password </td> <td><input type="password" name="pass2" maxlegnth="10"></td>
      </tr>
    </table>

    <div id = "register_box_info">
      <p id="register_links">
        <input type="checkbox" name ="terms"/> I have read and understood the <a href="terms.php"> Terms of Use</a>, and I agree to them.
      </p>
      <p>   
      * You can choose any password. It does not have to be, and should not be, your AFS password.
      </p>
      <div id = "fb_button" style="text-align: center;"> <input type="submit" name="submit" value="Register Now!" /></div>
      </div>
  </form> 
</div>

<?php
  }
  
?>


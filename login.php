<?php
  // Connects to your Database
  require('db_connect.php');
  $link = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
  mysql_select_db("thefacebook") or die(mysql_error());

  //Checks if there is a login cookie
  if(isset($_COOKIE['id_my_site']))
  {
  //if there is, it logs you in and directes you to the members page
    $email = $_COOKIE['id_my_site'];
    $pass = $_COOKIE['key_my_site'];
      $query = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
    $check = mysql_query($query)or die(mysql_error());
    while($info = mysql_fetch_array( $check ))
    {
      if ($pass != $info['password'])
      {
      }
      else
      {
        header('Location: profile.php?');
        exit;
      }
    }
  }
  //if the login form is submitted
  if (isset($_POST['submit']))
  { // if form has been submitted
    // makes sure they filled it in
    if(!$_POST['email'] | !$_POST['pass'])
    {
     die('<div style="margin-top: 50px; text-align: center;">
        You did not fill in a required field.</div>');
    }
    // checks it against the database
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $query = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
    $check = mysql_query($query) or die(mysql_error());

    //Gives error if user dosen't exist
    $check2 = mysql_num_rows($check);
    if ($check2 == 0)
    {
      die('<div style="text-align: center; margin-top: 50px;">
        That user does not exist in our database. </div>');
    }
    while($info = mysql_fetch_array( $check ))
    {
      $_POST['pass'] = stripslashes($_POST['pass']);
      $info['password'] = stripslashes($info['password']);

      // if login is ok then we add a cookie
      $_POST['email'] = stripslashes($_POST['email']);
      $hour = time() + 3600;  //Cookie timeout of 1 hour
      setcookie('id_my_site', $_POST['email'], $hour);
      setcookie('key_my_site', $_POST['pass'], $hour);
      setcookie('current_user_id', $info['id'], $hour);

      //then redirect them to the members area
      header('Location: profile.php?uid=' . $info['id']);
      exit;
    }
  }
?>
<?php include 'head_data.php'; ?>
  <body>
    <div id="content">
    <?php include 'header.php'; ?>

<div id="login_page_box">
 <div style="background-color: #4C70A0; color: white;">Thefacebook Login </div>
  <h1 style="text-align: center;">[ Login ] </h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

  <table>

   <tr>
    <td style="width: 60px;">Email: </td>
    <td><input type="text" name="email" /></td>
   </tr>
   <tr>
    <td>Password: </td>
    <td><input type="password" name="pass" /></td>
    </tr>
  </table>

  <table id="login_page_links">
   <tr>
     <td style="text-align: right; padding-right: 5px;"><div id="fb_button"><input type="submit" name="submit" value="Login" /></div></td>
   <td style="text-align: left; padding-left: 5px;">&nbsp;</td>
   </tr>
   <tr>
    <td colspan="2">
 <br />
If you have forgotten your password, click <a href="reset.php">here</a> to reset it.
    </td>
   </tr>
  </table>

 </form>
</div>

<div id="footer">

 <p>
   <a href="about_us.php">about</a> &nbsp;
   <a href="contact.php">contact</a> &nbsp;
   <a href="faq.php">faq</a> &nbsp;
   <a href="terms.php">terms</a> &nbsp;
   <a href="privacy.php">privacy</a> &nbsp;
   <br />
   a Mark Zuckerberg production
   <br />
   Thefacebook &copy; 2004
 </p>
</div>

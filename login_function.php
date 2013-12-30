<?php
  // Connects to your Database
  require('db_connect.php');
  mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
  mysql_select_db($dbname) or die(mysql_error());
  //Checks if there is a login cookie
  if(isset($_COOKIE['id_my_site']))
  {
  //if there is, it logs you in and directes you to the members page
    $email = $_COOKIE['id_my_site'];
    $pass = $_COOKIE['key_my_site'];
          $query = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";
          echo $query;
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


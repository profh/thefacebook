<?php
  mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
  mysql_select_db($dbname) or die(mysql_error());

  if(isset($_GET['uid']))
  {
    $user_id = $_GET['uid'];
  }
  else
  {
    $user_id = $_COOKIE['current_user_id'];
  }
  $query = mysql_query("SELECT * FROM users WHERE id = $user_id") or die(mysql_error());

  $info = mysql_fetch_array($query);
?>
<div id="information_box">
<div style="background-color: #4C70A0; color: white">
<table style="border-collapse: collapse; width: 100%;">
  <tr>
   <td>Information</td>
   <td></td>
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
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method ="post">
  <table>
    <th>Basic Info:</th>
      <tr>
       <td>Email:</td>
       <td><?php echo $info['email'] ?></td>
      </tr>
      <tr>
       <td>Status:</td>
       <td>
        <select name="status">
          <option value="<?php echo $info['status'] ?>"><?php echo $info['status'] ?></option>
          <option value="Student">Student </option>
          <option value="Alumnus">Alumnus/Alumna</option>
          <option value="Faculty">Faculty</option>
          <option value="Staff">Staff</option>
        </select>
      </td>
      </tr>
      <tr>
       <td>Sex:</td>
       <td>
        <select name="sex">
          <option value="<?php echo $info['sex'] ?>"><?php echo $info['sex'] ?></option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Couple">Couple</option>
        </select>
      </tr>
      <tr>
       <td>Year:</td>
       <td>
        <select name="year">
        <option value="<?php echo $info['year'] ?>"><?php echo $info['year'] ?></option>
        <option value="2016">2016</option>
        <option value="2016">2016</option>
        <option value="2015">2015</option>
        <option value="2014">2014</option>
        <option value="2013">2013</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
        </select>
        </td>
        </tr>
        <tr>
       <td>Concentration:</td>
       <td><input type="text" name="concentration" value="<?php echo $info['concentration'] ?>" /></td>
      </tr>
      </tr>
  </table>
  <table>
   <th>Extended Info:</th>
      <tr>
       <td>Screenname:</td>
       <td><input type="text" name="screenname" value="<?php echo $info['screenname'] ?>" /></td>
      </tr>
      <tr>
       <td>Looking For:</td>
       <td><input type="text" name="looking_for" value="<?php echo $info['looking_for'] ?>" /></td>
      </tr>
      <tr>
       <td>Interested In:</td>
       <td>
          <select name="interested_in">
            <option value="<?php echo $info['interested_in'] ?>"><?php echo $info['interested_in'] ?></option>
            <option value="Women">Women</option>
            <option value="Men">Men</option>
            <option value="Couple">Couple</option>
          </select>
      </td>
      </tr>
      <tr>
       <td>Relationship Status:</td>
       <td>
          <select name="relationship">
            <option value="<?php echo $info['relationship'] ?>"><?php echo $info['relationship'] ?></option>
            <option value="Single">Single</option>
            <option value="In a relationship">In a Relationship</option>
            <option value="Married">Married</option>
            <option value="It's Complicated">It's Complicated</option>
          </select>
      </td>
      </tr>
      <tr>
       <td>Political Views:</td>
       <td>
          <select name="political_view">
            <option value="<?php echo $info['political_view'] ?>"><?php echo $info['political_view'] ?></option>
            <option value="Liberal">Liberal</option>
            <option value="Conservative">Conservative</option>
            <option value="Moderate">Moderate</option>
                        <option value="Libertarian">Libertarian</option>
          </select>
        </td>
      </tr>
      <tr>
       <td>Interests:</td>
       <td><input type="text" name="interests" value="<?php echo $info['interests'] ?>" /></td>
      </tr>
  </table>
  <div id="fb_button" style="text-align: center;"> <input type="submit" name="submit" value="Update Profile" /></div>
  </form>
</div>

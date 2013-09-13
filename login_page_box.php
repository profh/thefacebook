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

<?php include 'login_function.php'; ?>
</div>

<div id="login_box">
  <div style="text-align: right;">

  <form action ="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Email:<br />
    <input type="text" name="email" />
    Password:<br />
    <input type="password" name="pass" />
    </div>

    <table style="width: 100%;">
      <tr>
       <td style="text-align: right;">
        <!--<div id="fb_button"><input type="button" value="register" /></div> -->
       </td>
       <td style="text-align: left;">
        <div id="fb_button"><input type="submit" name="submit" value="login" /></div>
       </td>
      </tr>
    </table>
  </form>

</div>

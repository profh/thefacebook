<div id = "connection_box">

  <div style="color: white; background-color: #4C70A0; text-align: left;">Connection </div>
    <?php 
      if ($user_id == $_COOKIE['current_user_id'])
      {
        echo 'This is you';
      }
      else
      {
        echo 'You are not connected';
      }
    ?>
  </div>


<?php
  session_start();

  if (!session_is_registered(username)) {
    header("location:resp.php");
  }
  else {
    echo "session-established";
  }
?>

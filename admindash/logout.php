<?php
// remove all session variables
session_unset();
session_destroy();
header("Location:index.php");
  ?>
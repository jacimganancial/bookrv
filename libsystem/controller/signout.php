<?php
  session_start();
   unset($_SESSION['stud_num']);
   unset($_SESSION['password']);
   unset($_SESSION['stud_num']);

   $_SESSION['valid'] = false;

   session_unset();
   session_destroy();
   echo 'You have cleaned session';
   header('location:signin');
?>

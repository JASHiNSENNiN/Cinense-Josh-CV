<?php
   require_once './php/config.php';
   session_unset();
   session_destroy();
   header("Location: ./index.php");
   exit;
   ?>
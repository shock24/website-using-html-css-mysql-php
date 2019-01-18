<?php
require 'common.php';
session_unset();//deletes the variables form sessions.
session_destroy();//destroy entire session from server and session id from browser.
echo "successfully logged-out";
header('location: index.php');
?>
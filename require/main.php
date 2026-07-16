<?php
// difference between include and require
// if file does not exist required will create an error
// but include will just give us a warning if file does not exist
include 'config.php';
// require 'config.php';


echo "Database $dbHost:$dbUser";



<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.
//hellofff



ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


    
//putenv('PATH=/usr/local/bin');
$output = shell_exec('cd /var/www/u202319/data/www/woo.dmn.gg && /usr/bin/git pull origin main 2>&1');


 echo "<pre>$output</pre>";

//boftffg
?>

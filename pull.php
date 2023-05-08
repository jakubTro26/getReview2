<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.
//hellofff

echo 'kuba';
if ( $_POST['payload'] ) {
putenv('PATH=/usr/local/bin');
echo shell_exec('cd /var/www/u202319/data/www/woo.dmn.gg && /usr/bin/git pull 2>&1');
echo shell_exec('/usr/bin/whoami 2>&1');
echo 'mateusz2';
}
//boftff
?>

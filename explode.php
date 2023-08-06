<?php

$data = 'foo:*:1023:1000::/home/foo:/bin/sh';
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(':', $data);
echo $user . PHP_EOL ;
echo $pass . PHP_EOL ;
echo $uid . PHP_EOL ;
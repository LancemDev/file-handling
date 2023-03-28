<?php
file_put_contents('to-do.txt', "\nCode in Flutter", FILE_APPEND);
$to_do_file=fopen('to-do.txt', 'r');
$to_do_size=filesize('to-do.txt');
echo fread($to_do_file,$to_do_size);
fclose($to_do_file);
?>
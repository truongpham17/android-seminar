<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
// header('Access-Control-Allow-Origin: *');

$time = date('r');
echo "data: The server time is: {$time}\n\n";
flush();
?>
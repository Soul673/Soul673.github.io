<?php
$ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
file_put_contents('ip_address', $ip . ' - ' . date("d/m/Y") .PHP_EOL, FILE_APPEND);
?>
<?php 

require_once 'Server.php';

extract(Server::pageController());
echo 'Your randomly generated server name is ' . $message . PHP_EOL;

?>
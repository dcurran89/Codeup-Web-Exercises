<?php

require 'db_credentials.php';
require 'db_connect.php';

echo $db_connection->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
<?php
$server = 'mysql:host=us-cdbr-iron-east-04.cleardb.net';
$username = 'b7033fa1802780';
$password = '0c7c53db';
$db = 'heroku_d99342182a84fcf';

return [
  'database' => [
    'connection' => $server,
    'username' => $username,
    'password' => $password,
    'name' => $db,
    'options' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  ]
];

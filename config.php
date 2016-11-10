<?php

return  [
  'database' => [
    'name' => 'unityAccelerator',
    'username' => 'root',
    'password' => 'root',
    'connection' => 'mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]
  ]
];


//test stuff

<?php

// return  [
//   'database' => [
//     'name' => 'unityAccelerator',
//     'username' => 'root',
//     'password' => 'root',
//     'connection' => 'mysql:unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock',
//     'options' => [
//       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     ]
//   ]
// ];

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$config = array(
    'host' => $server ,
    'user' => $username ,
    'pw' => $password,
    'db' => $db
);


//test stuff

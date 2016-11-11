<?php

return  [
  'database' => [
    'name' => 'heroku_d99342182a84fcf	',
    'username' => 'b7033fa1802780',
    'password' => '0c7c53db',
    'connection' => 'mysql://b7033fa1802780:0c7c53db@us-cdbr-iron-east-04.cleardb.net/heroku_d99342182a84fcf?reconnect=true',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]
  ]
];
//
// // for heroku deployment
//
// $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $server = $url["host"];
// $username = $url["user"];
// $password = $url["pass"];
// $db = substr($url["path"], 1);
//
// $config = array(
//     'host' => $server ,
//     'user' => $username ,
//     'pw' => $password,
//     'db' => $db
// );
//
// print('Host'. $config['host']);
//
// return $config;

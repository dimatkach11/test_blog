<?php

require_once "./config.php";

$dsn = "mysql:host=".$config[db][server].";dbname=".$config[db][name];

try {
  $pdo = new PDO(
    $dsn, 
    $config[db][username], 
    $config[db][password]
  );
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}


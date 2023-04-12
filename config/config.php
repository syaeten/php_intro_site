<?php
  $host = 'localhost';
  $dbname = 'php_intro_site_db';
  $user = 'root';
  $password = '1234';

  // 创建PDO连接  Create PDO connection
  $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
  $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
      PDO::ATTR_EMULATE_PREPARES => false,
  ];
  try {
      $pdo = new PDO($dsn, $user, $password, $options);
  } catch (PDOException $e) {
      throw new PDOException($e->getMessage(), (int)$e->getCode());
  }














?>
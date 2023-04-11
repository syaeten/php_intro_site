<?php
require_once '../models/Article.php';


function get_articles(){
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

  // 执行查询语句  Execute query statement
  $sql = "SELECT * FROM article";
  $stmt = $pdo->query($sql);
  $article_list = $stmt->fetchAll();

  /*
  while ($row = $stmt->fetch()) {
      echo "id: " . $row["id"]. " - Title: " . $row["title"]. " - Content: " . $row["content"]. "<br>";
  }*/

  // 关闭连接  Close the connection
  $pdo = null;

  return $article_list;

};



/*function get_articles(){
  $atricals=[];

  $atricals.push(new Article(
    '基本语法',
    'aaaaa'
  ));
  $atricals.push(new Article(
  '常用',
  'bbbbb'
  ));

  return [$artical_1,$artical_2];
  }*/





      ?>
<?php
require_once '../models/Article.php';
require_once '../../config/config.php';

function get_articles(){

  global $pdo;  //global访问全局变量 Access global variables.


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
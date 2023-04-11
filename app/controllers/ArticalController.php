<?php
require_once '../models/Article.php';


function get_articles(){
  $host = 'localhost';
  $dbname = 'php_intro_site_db';
  $user = 'root';
  $password = '1234';

  // 创建PDO连接
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

  // 执行查询语句
  $sql = "SELECT * FROM article";
  $stmt = $pdo->query($sql);
  $article_list = $stmt->fetchAll();

  /*
  while ($row = $stmt->fetch()) {
      echo "id: " . $row["id"]. " - Title: " . $row["title"]. " - Content: " . $row["content"]. "<br>";
  }*/

  // 关闭连接
  $pdo = null;

  return $article_list;

};



/*function get_articles(){
  $atricals=[];
  $atricals.push(new Article(
    '',
    ''
  ));
  $atricals.push(new Article(
    '基本语法',
    ' php代码写在这个里面: <?php   ?>
结尾: 用分号;断句
单行注释:// , 多行注释:
变量: 用$开头
函数: function xx() {}

while循环: while() {}
do..while循环: do {} while {}
for循环: for() {}
foreach: foreach ($array as $value){} / foreach ($array as $key => $value){}

函数内访问全局变量: global关键字
局部静态变量: static关键字
'
));
$atricals.push(new Article(
'常用',
'输出: echo / print
定义常量: define("X","xxx") (使用常量名的时候不用再加$)



'
));

$atricals.push(new Article(
'数据类型',
'
Integer (整型): 整数
Float (浮点型): 小数
String (字符串): 文本
Boolean (布尔型): true / false (不区分大小写)
Array (数组): 数组
Object (对象): 对象
Null (空值): null (不区分大小写)
Resource (资源): 资源类型
'
));



$atricals.push(new Article(
'运算符',
'
【算术运算】
+ 加; - 减法; * 乘; / 除
~ 取反
% 取模
** 幂运算

【递增/递减】
++ x 预递增; x ++ 后递增
-- x 预递减; x -- 后递减

【比较运算符】
== 等于; ===绝对对于
!= 不等于 ; !==不绝对等于
<> 不等于（和!=相同）
  > 大于; < 小于;>= 大于等于; <= 小于等于 【逻辑运算符】 && 与; || 或; ! 非 and 与（和 && 相同）; or 或（和 || 相同） xor 异或 【字符串运算符】 . 字符串连接运算符
      .=连接后赋值运算符 【条件运算符】 ?: 三元运算符 ?? 空合并运算符 <=> 太空船运算符

      【引用运算符】
      & 用于引用赋值，也可用于函数参数传递

      【执行运算符】
      ` 命令执行运算符（反引号）
      '
      ));
      $atricals.push(
      new Article(
      '循环',
      'xxxx'
      ));

      return [$artical_1,$artical_2];
      }*/





      ?>
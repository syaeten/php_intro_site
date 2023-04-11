<?php
  require_once '../../public/partials/header.php';
  require_once '../../public/partials/nav.php';
  require_once '../controllers/ArticalController.php';
?>
<?php
$articles=get_articles();

?>
<?php
foreach ($articles as $article):
?>

<div>
  <h2>PHP 基础语法 (Basic syntax of PHP)</h2>
  <h2><?=$article['title']?></h2>
  <h2><?=$article['content']?></h2>
</div>

<?php
endforeach;
?>

<?php
  require_once '../../public/partials/footer.php';
?>
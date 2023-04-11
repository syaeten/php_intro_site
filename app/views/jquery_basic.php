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
  <h2>jQuery基础语法</h2>
  <h2><?=$article->title?></h2>
  <p><?=$article->content?></p>
</div>

<?php
endforeach;
?>

<?php
  require_once '../../public/partials/footer.php';
?>
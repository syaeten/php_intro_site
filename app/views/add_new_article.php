<?php
  require_once '../../public/partials/header.php';
  require_once '../../public/partials/nav.php';
?>
<div>
  <h2>添加新文章 (Add New Article)</h2>
  <form action="submit.php" method="post">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title"><br><br>
    <label for="content">Content:</label>
    <textarea id="content" name="content"></textarea><br><br>
    <input type="submit" value="Submit">
  </form>
</div>
<?php
  require_once '../../public/partials/footer.php';
?>
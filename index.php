<?php
  //echo getcwd()."\n";  //要用双引号不是单引号啊啊啊啊
  /*$file = 'app/views/php_basic.php';
  if (file_exists($file)) {
      echo "File exists!" . $file;
  } else {
      echo "File doesn't exist.";
  }*/
  require_once 'public/partials/header.php';
?>
<?php
  require_once 'public/partials/nav.php';
?>



<div style="padding:20px;margin-top:30px;background-color:#f2f2f2;">
  <h2>Welcome to my website!</h2>
  <p>Here you can learn about PHP and MySQL.</p>
</div>


<?php
  require_once 'public/partials/footer.php'
?>
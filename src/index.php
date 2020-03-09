<?php
  require_once('templates/template_class.php');
  $page = new Page;
  $page->setTitle('Home');
  $page->startBody();
?>
<h2>Home</h2>
<p>Lorem ipsum dolor sit amet, consectetur...</p>
<?php
  $page->endBody();
  echo $page->render('templates/template.php');

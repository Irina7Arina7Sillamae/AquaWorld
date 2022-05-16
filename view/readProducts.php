<?php
ob_start();
?>

<h1 >ONE Product</h1>
<?php
Controller::CategoryByID($_GET['id']);
?>

<br>
<?php
ViewProducts::ReadProducts($n);

echo "<br>";
ViewComments::CommentsForm();

echo "<br>";
Controller::Comments($_GET['id']);


$content = ob_get_clean();
include_once 'view/layout.php';
?>
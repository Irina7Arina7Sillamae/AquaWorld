<?php
ob_start();
?>

<h1>Products (categories)<br><?php echo $_POST["cat"]?></h1>
<!--  <h1>Products (categories)<br><?php echo $_POST[$row['name']]?></h1>  -->
<!--<h1>Products (categories)<br><?php echo $_POST[$_GET['category'].$_GET['id']]?></h1>  -->


<br>


<?php
ViewProducts::ProductsByCategory($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
?>
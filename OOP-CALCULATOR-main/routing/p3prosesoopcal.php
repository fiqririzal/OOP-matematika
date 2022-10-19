<?php

require_once('../class/p3classoopcal.php')
?>

<?php
$variable1 = $_POST['variable1'];
$variable2 = $_POST['variable2'];
$operator = $_POST['operator']; 

$calculator = new Cal($variable1,$variable2,$operator);
echo $calculator->calcMethod();
?>
<?php
include_once '../models/model.php';

$num=$_GET['name'];
$name=book($num,$con);
echo $name;
?>
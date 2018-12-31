<?php
include_once '../models/model.php';
include_once '../connet.php';

$num=$_GET['name'];
//ne class
$class= new model;
echo $class->book($num,$con);

?>
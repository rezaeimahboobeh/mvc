<?php
include_once '../connet.php';


function book ($num,$con){

	$sql="SELECT * FROM book WHERE  id=".$num."";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();

	return $row['name'];
}


?>
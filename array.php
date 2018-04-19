<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		This is a title
	</title>
</head>
<body>
<?php 
$data = array("first","second");
//first method to put data in the array
$data[] = "Daniel";
$data[] = 15;
print_r($data);
//second method to put data in the array
array_push($data,"Daniel");
array_push($data,"Jason");
array_push($data, 1,2,3,4,5);
print_r($data);
//thrid method to push data in the array

// Type of arrays

// Indexed arrays
$data = array("a","b","c");
echo $data[0];


 ?>
</body>
</html>
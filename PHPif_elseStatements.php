<!DOCTYPE html>
<html>
<head>
	<title>PHP IF ELSE  Statement</title>
</head>
<body>



<h2>Example IF Condition</h2><br>

<?php
$data= 10;

if($data < '20'){
	echo "IF Condition";
}

?>
<br>

<h2>Example ELSE  Condition</h2><br>

<?php
$data= 10;

if($data > '20'){
	echo "IF Condition";
}
else{
	echo "ELSE Condition";
}

?>

<h2>Example ELSE IF Condition</h2><br>

<?php
$data= 30;

if($data < '20'){
	echo "IF Condition";
}
elseif($data > '35'){
	echo "else Condition";
}
else{
	echo "else if Condition";
}

?>




</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Variable</title>
</head>
<body>

<h2>What are Variables?</h2><br>
<spen>Variables are "containers" for storing information.</spen><br>
<span>*** In PHP, a variable starts with the $ sign, followed by the name of the variable:</span><br><br>

<h4>Variables Example </h4>

<?php
  $var="<h2>hello PHP</h2>";
  echo "$var";
?>

<h2>PHP has three different variable scopes</h2>

<ul>
	<li>Local</li>
	<li>Global</li>
	<li>static</li>
</ul><br>

<h3>Example Variable with global scope:</h3><br>

<?php
 $x = 5;
 function myTest() {
 // using x inside this function will generate an error
//  echo "<p>Variable x inside function is: $x</p>";
 }
  myTest();
  echo "<p>Variable x outside function is: $x</p>";
?>

<br><br>

<h3>Example Variable with local scope:</h3><br>

<?php
  function myTestone(){
  $x = 5;
  echo "<p>Variable x inside function is: $x</p>";
 }
	myTest();
	echo "<p>Variable x outside function is: $x</p>";
	?>

	<br><br>


	<h3>Example Variable with static scope:</h3><br>
	<?php
  function myTesttwo() {
  static $x = 0;
  echo $x;
  $x++;
  }
		myTesttwo();
		myTesttwo();
		myTesttwo();
		?>







	

</body>
</html>
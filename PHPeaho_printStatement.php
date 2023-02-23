<!DOCTYPE html>
<html>
<head>
	<title>PHP echo & print statement</title>
</head>
<body>

<h2>what is echo & print Statements</h2><br>
<spen>PHP, there are two basic ways to get output: echo and print</spen><br></br>



<h2>how to differences echo & print Statements</h2><br>
<spen>echo and print are more or less the same. They are both used to output data to the screen.
The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print
</spen><br></br>


<h4>Example For echo Statements</h4>


	<?php
		echo "<h2>PHP is Fun!</h2>";
		echo "Hello world!<br>";
		echo "I'm about to learn PHP!<br>";
		echo "This ", "string ", "was ", "made ", "with multiple parameters.";
	?>

<h4>Example For print Statements</h4>

<?php
	print "<h2>PHP is Fun!</h2>";
	print "Hello world!<br>";
	print "I'm about to learn PHP!";
?>

</body>
</html>
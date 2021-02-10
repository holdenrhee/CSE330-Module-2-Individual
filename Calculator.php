<!DOCTYPE html>
<html class = "calc">
<link rel = "stylesheet" href = "calculatorStyle.css">
<head><title> Calculator </title></head>
<body>
<h1>Holden's Calculator</h1>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="GET">

<label for="user">First Number:</label>
<input type="number" name="number1" id="number1" />
<br><br>
<label for="user">Second Number:</label>
<input type="number" name="number2" id="number2" />
<br><br>

<input type="radio" name="operation" value="+" />
<input type="radio" name="operation" value="-" />
<input type="radio" name="operation" value="x" />
<input type="radio" name="operation" value="÷" />
<br><br><br>
<input type="submit" name="clicked" value="Calculate" />
</form>

<?php
$operation = $_GET['operation'];
$number1 = (double) $_GET['number1'];
$number2 = (double) $_GET['number2'];
$finalNum = 0;
$clicked = $_GET['clicked'];

if($operation == "+")
{
$finalNum = $number1 + $number2;
}
else if($operation == "-")
{
$finalNum = $number1 - $number2;
}
else if($operation == "x")
{
$finalNum = $number1 * $number2;
}
else if($operation == "÷")
{
    if ($number2 == 0)
    {
	printf("Error. Cannot divide by zero.");
    }
    else
    {	
	$finalNum = $number1 / $number2;
    }
}
if(($number1 > 0 || $number2 > 0) && isset($clicked))
{
printf("<p>The answer is: %.2f</p>", $finalNum);
}
?>
</body>
</html>
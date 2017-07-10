<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!--
	Name: Elisabeth Feeley
	Date: 12/2/2013
	Description: Assingment 9.11 adding function to forms
	Assistance:
		Handling checkboxes in PHP: http://www.html-form-guide.com/php-form/php-form-checkbox.html
-->	 

<head>
   <title>Lightbulbs</title>
   <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
</head>

<body>

<?php
	
	extract($_POST);
	
	$name = ($_POST['name']);
	$fourr = ($_POST['4r']);
	$fourr_cost = 2.39;
	$eightr = ($_POST['8r']);
	$eightr_cost = 4.29
	$fourll = ($_POST['4ll']);
	$fourll_cost = 3.95
	$eightll = ($_POST['8ll']);
	$eightll_cost = 7.49
	$payment = ($_POST['payment']);
	$total_cost ="";
	
	if ($fourr = 'checked')
	{
		$total_cost += $fourr_cost;
	}
	if ($eightr = 'checked')
	{
		$total_cost += $eightr_cost;
	}	
	if ($fourll = 'checked')
	{
		$total_cost += $fourll_cost;
	}	
	if ($eightll= 'checked')
	{
		$total_cost += $eightll_cost;
	}

	//Sets the values of $payment from variables to strings
	if ($payment == null)
	{
		$payment = "You did not select a payment method";
	}
	else if ($payment = 'visa')
	{
		$payment = "Visa";
	}
	else if ($payment = 'mastercard')
	{
		$payment = "MasterCard";
	}
	else if ($payment = 'discover')
	{
		$payment = "Discover";
	}
?>

<h1>Order Summary</h1>

<table>
	<tr>
		<td>Your Name: </td>
		<td><?php echo ("$name"); ?></td>
	</tr>
	<tr>
		<td>Your Order: </td>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>Your Payment Method: </td>
		<td><?php echo ("$payment"); ?></td>
	</tr>
	<tr>
		<td>Your Total: </td>
		<td><?php echo ("$" . round($total_cost*1.062,2)); ?></td>
	</tr>
</table>



<p>
      <a href="http://validator.w3.org/check?uri=referer">
		<img src="http://www.w3.org/Icons/valid-xhtml10" 
		   alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>

    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Valid CSS!" />
    </a>
</p>
</body>

</html>
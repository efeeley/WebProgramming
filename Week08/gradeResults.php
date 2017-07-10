<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<!--
	Name: Elisabeth Feeley
	Date: 20/2/2013
	Description: final assignment
	Assistance:
-->	 

<head>
   <title>Grade Calculator Results</title>
   <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
</head>

<body>

<?php
	
	extract($_POST);
	
	$attendance = ($_POST['attendance']);
	$assignments = ($_POST['assignments']);
	$midterm = ($_POST['midterm']);
	$final = ($_POST['final']);
	$calculatedGrade = "";

	$calculatedGrade = ($attendance*.1) + ($assignments*.6) + 
	($midterm*.15) + ($final*.15);
?>
<h1>You Entered: </h1>

<table>
	<tr>
		<td>Number of Days Attended: </td>
		<td><?php echo ("$attendance"); ?></td>
	</tr>
	<tr>
		<td>Number of Assignments Done: </td>
		<td><?php echo ("$assignments"); ?></td>
	</tr>
	<tr>
		<td>Midterm Exam Grade: </td>
		<td><?php echo ("$midterm"); ?></td>
	</tr>
	<tr>
		<td>Final Exam Grade: </td>
		<td><?php echo ("$final"); ?></td>
	</tr>
	<tr>
		<td>Calculated Grade: </td>
		<td><?php echo ("$calculatedGrade"."%"); ?></td>
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
<!DOCTYPE html>
<html lang = 'en'>
<head>
	<meta charset = 'utf-8' />
	<title> Password Generator </title>

	<link rel = 'stylesheet' href = 'css/bootstrap.css' type = 'text/css' />
	<?php require 'logic.php' ?>
</head>

<body class = 'container'>

	<h1 class = 'text-center'> XKCD-Style Password Generator </h1>

	<div class = 'text-center'>
		<form method = 'POST' action = 'index.php'>
			<label for='words'># of Words</label>
				<input class = 'input-sm input-width' type='text' name='words' id='words' maxlength = 1 value=''> <br>
			<label for='number'>Include a Number?</label>
				<input type = 'checkbox' name = 'number' id = 'number'> <br>
			<label for='symbol'>Include a Symbol?</label>
				<input type = 'checkbox' name = 'symbol' id = 'symbol'> <br>
			<label for='uppercase'>Capitalize first letter?</label>
				<input type = 'checkbox' name = 'uppercase' id = 'uppercase'> <br>

			<input type='submit' class='btn btn-default' value='Generate Password'>
		</form>
	</div>


</body>

</html>

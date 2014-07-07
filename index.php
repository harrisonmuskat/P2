<!DOCTYPE html>
<html lang = 'en'>
<head>
	<meta charset = 'utf-8' />
	<title> Password Generator </title>

	<link rel = 'stylesheet' href = 'css/bootstrap.css' type = 'text/css' />
	<?php require 'logic.php' ?>

	<style>
		.output {
			text-align: center;
			background-color: #545454;
			padding: 10px;
			color: #B5B4B4;
			display: block;
		}

		.input {
			background-color: #CDCDCD;
		}

	</style>
</head>

<body class = 'container'>
	<div class = 'row'>
		<h1 class = 'text-center'> XKCD-Style Password Generator </h1>

		<div class = 'col-md-10 col-md-offset-1'>
			<h3 class = 'text-center output img-rounded'> <?php echo $pw; ?> </h3>
			<br>
		</div>

		<div class = 'col-md-6 col-md-offset-3 text-center'>
			<p>
				<form method = 'POST' action = 'index.php'>
					<label for='words'># of Words</label>
						<input class = 'input-sm input-width input' type='text' name='words' id='words' maxlength = 1 value=''> 
						<label for = 'words'>(Max. 9)</label> <br>
					<label for='number'>Include a Number?</label>
						<input type = 'checkbox' name = 'number' id = 'number'> <br>
					<label for='symbol'>Include a Symbol?</label>
						<input type = 'checkbox' name = 'symbol' id = 'symbol'> <br>
					<label for='uppercase'>Capitalize first letter?</label>
						<input type = 'checkbox' name = 'uppercase' id = 'uppercase'> <br><br>

					<input type='submit' class='btn btn-primary btn-lg' value='Generate Password'>
				</form>
			</p>
		</div>
	</div>

</body>

</html>

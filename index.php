<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1>
		<?php
			if(isset($_GET['email'])){
				print_r($_GET['email']);
			}
			
			print_r($_POST);
			if(isset($_POST['number1']) && $_POST['number1'] != "" && isset($_POST['number2']) && $_POST['number2'] != "" && isset($_POST['uildel']) && $_POST['uildel'] != ""){
				$uildel = $_POST['uildel'];
				switch($uildel){
					case "+":
						$hariu = $_POST['number1'] + $_POST['number2'];
						break;
					case "-":
						$hariu = $_POST['number1'] - $_POST['number2'];
						break;
					case "*":
						$hariu = $_POST['number1'] * $_POST['number2'];
						break;
					case "/":
						$hariu = $_POST['number1'] / $_POST['number2'];
						break;
					default: 
						$hariu = "Aldaa";
				}
				echo $hariu;
			}
		?>
	</h1>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Calculator</h2>
				<form action="index.php" method="POST" class="">
					<input name="number1" type="number" placeholder="#1" required>
					<input name="number2" type="number" placeholder="#2" required>
					<select name="uildel" class="form-select" aria-laber="Uildel" required>
						<option selected></option>
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="/">/</option>
						<option value="*">*</option>
					</select>
					<button type="submit">Calculate</button>
				</form>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>It is Get section</h2>
				<!-- 
					action ni uildel 
					method ni arga
				-->
				<form action="index.php" method="GET" class="">
					<input type="email" id="email" name="email">
					<input type="text" name="name" id="name">
					<textarea name="message" id="message"></textarea>
					<button type="submit">send</button>
				</form>
			</div>
		</div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
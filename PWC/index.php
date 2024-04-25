<!DOCTYPE html>	
<html>
	<head>
		<title>PWC</title>
	</head>
	<body>
		<div id="main">
			<form method="POST">
				<h1>Find Weight</h1>
				<label>Enter the Lenght(cm):</lable><br>
				<input type="number" name="length"/><br>
				<label>Enter the Width(cm):</label><br>
				<input type="number" name="width"/><br>
				<label>Enter the Height(cm):</label><br>
				<input type="number" name="height"/><br>
    			<input type="submit" name="submit">

			</form>
			<?php
            print_r($_POST);
			if(isset($_POST['submit'])){
			if(isset($_POST['length'])&& isset($_POST['width']) && isset($_POST['height'])){
					$width = $_POST['width'];
					$height = $_POST['height'];
					$length = $_POST['length'];

					$volume= ($width*$height*$length)/5000;
					$weight=$volume;
					echo " The physical weight is: $weight";
		
			}
			
		 }
			
			?>
		</div>
	</body>
</html>
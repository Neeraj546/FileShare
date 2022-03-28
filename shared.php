<?php
	$files = scandir("upload");
	
	for($i = 2; $i < count($files); $i++){
		echo $files[$i] . " ";?><form action="?" method="POST"><button name="delete" class="delbtn" value="<?php echo $files[$i]; ?>">Delete</button></form><br/><br/><?php
	}
	if(isset($_POST['delete'])){
		$path = "upload/" . $_POST['delete'];
		unlink($path);
		header("location:shared.php");
	}
	if(isset($_POST['stop'])){
		for($i = 2; $i < count($files); $i++){
			$path = "upload/" . $files[$i];
			unlink($path);
		}
		header("location:index.php");
	}
?>
<!Doctype Html>
<html>
	<head>
		<title>File Share</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<style type="text/css">
			.btn{
				padding: 10px;
				color: #fff;
				background-color: #000;
				width: 120px;
				border: none;
				cursor: pointer;
			}
			.delbtn{
				padding: 5px;
				color: #fff;
				background-color: red;
				width: 80px;
				border: none;
				cursor: pointer;
			}
		</style>
	</head>
	<body>
		<form action="shared.php" method="POST">
			<center>
				<a href="send.php"><input type="button" class='btn' value="Add file" /></a><br/><br/>
				<input type="submit" class='btn' value="Stop Sharing" name="stop" />
			</center>
		</form>
	</body>
</html>

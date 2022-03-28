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
			.downbtn{
				padding: 10px;
				color: #fff;
				background-color: #339ed4;
				width: 120px;
				border: none;
				cursor: pointer;
			}
		</style>
	</head>
	<body>
		<center>
			<h1>File Share</h1>
		
			<?php
				$files = scandir("upload");
		
				for($i = 2; $i < count($files); $i++){
					$path = "upload/" . $files[$i];
					echo $files[$i] . " ";?><a href="<?php echo $path; ?>"><input type="button" class="downbtn" value="Download"></a><br/><br/><?php
				}
				if(count($files)<=2){
					echo "No files Uploaded yet!";?><br/><br/><?php
				}
			?>
			<a href="index.php"><button class="btn">Cancel</button></a>
		</center>
	</body>
</html>

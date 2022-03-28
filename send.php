<?php
	if(isset($_POST['start'])){
		$file = $_FILES["file"];
		$file_name = basename($file['name']);
		$file_size = $file['size'];
		$file_type = $file['type'];
		$file_temp = $file['tmp_name'];
		$file_store = "upload/".$file_name;
		
		if(move_uploaded_file($file_temp, $file_store)){
			echo "File uploded Sucessfully";
			header("location:shared.php");
		}
		else{
			echo "File not Uploaded";
		}
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
			input[type="file"]{
				padding: 20px;
				background-color: #000001;
				color: #fff;
				border-radius: 5px;
				cursor: pointer;
			}
			td{
				padding: 30px;
			}
			.btn{
				padding: 10px;
				color: #fff;
				background-color: #000;
				width: 120px;
				border: none;
				cursor: pointer;
			}
		</style>
	</head>
	<body>
		<h1 align="center">File Share</h1>
		<form method="POST" enctype="multipart/form-data" action="send.php">
			<table align="center">
				<tr align="center">
					<td colspan="2"><input type="file" name="file" required /></td>
				</tr>
				<tr>
					<td align="center"><input class="btn" type="Submit" value="Share" name="start" /></td>
					<td align="center"><input class="btn" type="reset" value="Clear" /></td>
				</tr>
			</table>
		</form>
		<center><a href="index.php"><button class="btn">Cancel</button></a></center>
	</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Category Add</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post" accept-charset="utf-8">
		<table>
				<tr>
					<td>title</td>
					<td>
						<input type="text"  name="title" value="" placeholder="title">
					</td>
					<td id="notiTitle"></td>
				</tr>
				<tr>
					<td>content</td>
					<td>
						<input type="text"  name="content" value="" placeholder="content">
					</td>
					<td id="notiContent"></td>
				</tr>
				<tr>
					<td>image</td>
					<td>
						<input type="file" name="image" value="">
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button type="submit" name="submit" class="btn btn-default">ADD</button>
					</td>
					<td><button onclick="history.back()" type="button" class="btn btn-default">BACK</button></td>
				</tr>
		</table>
	</form>
	<?php 
		if(isset($_POST['submit']))
		{
			$title=isset($_POST["title"])?$_POST["title"]:"";
			$content=isset($_POST["content"])?$_POST["content"]:"";
			$image=isset($_POST["image"])?$_POST["image"]:"";
			$mysqli=new mysqli("localhost","root","","n03");
			$mysqli->set_charset("utf8");
			$strQuery="INSERT INTO `category`(`title`, `content`, `image`) VALUES (\"$title\",\"$content\",\"$image\")";
			if(!($result=$mysqli->query($strQuery)))
			{
				die("Invailid query $strQuery");
			}
			header("location:category.php");
			$mysqli->close();
		}
	 ?>
</body>
</html>
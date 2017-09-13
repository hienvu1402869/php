<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="../../../phongtro/css/bootstrap.css">
	<style>
		*{padding:0.1em;margin:0.1em;}
	</style>
</head>
<body>

	<?php 
		$mysqli=new mysqli("localhost","root","","n03");
		$mysqli->set_charset("utf8");
		$strQuery="select * from category";
		if(!($result=$mysqli->query($strQuery)))
		{
			die("Invailid query $strQuery");
		}
		?>
		<a href="category_Add.php" style="text-decoration: none;" title=""><button type="button" class="btn btn-default">Thêm Category</button></a>
		<table class="table table-striped table-responsive">
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Content</th>
				<th>Images</th>
			</tr>
			<?php
				while ($row=$result->fetch_assoc()) 
				{ 
				?>
					<tr>
						<td><?php echo $row["id"] ?></td>
						<td><?php echo $row["title"] ?></td>
						<td><?php echo $row["content"] ?></td>
						<td><?php echo $row["image"] ?></td>
					</tr>
					<?php
				}
				$mysqli->close();
		 	?>
		</table>
			
</body>
</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body ng-app="myModule" ng-controller="myController">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - File Upload Usng PDO</h3>
		<hr style="border-top:1px dotted #ccc;">
		<div class="col-md-3">
			<form method="POST" enctype="multipart/form-data" action="upload.php">
				<div class="form-group">
					<label>Upload here</label>
					<input name="file" type="file"  required="required" class="form-control"/>
				</div>
				<center><button class="btn btn-primary" name="upload">Upload</button></center>
			</form>
		</div>
		<div class="col-md-9">
			<div class="table-responsive">	
				<table class="table table-bordered">
					<thead class="alert-info">
						<tr>
							<th>File Name</th>
							<th>File Type</th>
							<th>Date Uploaded</th>
							<th>File Path</th>
						</tr>
					</thead>
					<tbody>
						<?php
							require_once 'conn.php';
			
							$sql = "SELECT * FROM `image`";
							$query = $conn->prepare($sql);
							$query->execute();
							
							while($fetch = $query->fetch()){
						?>
					
						<tr>
							<td><?php echo $fetch['image_name']?></td>
							<td><?php echo $fetch['image_type']?></td>
							<td><?php echo $fetch['date_uploaded']?></td>
							<td><?php echo $fetch['location']?></td>
						</tr>
						
						<?php
							}
						?>
					</tbody>
				</table>
				<button><a href="readimages.php">Read Images</a></button>
			</div>	
		</div>
	</div>
</body>	
</html>
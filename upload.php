<?php	
	date_default_timezone_set("Etc/GMT-8");
	require_once 'conn.php';
	
	if(ISSET($_POST['upload'])){
		$image_name = $_FILES['file']['name'];
		$file_temp = $_FILES['file']['tmp_name'];
		$file_size = $_FILES['file']['size'];
		$file_type = $_FILES['file']['type'];
		$date_uploaded=date("Y-m-d");
		$location="upload/".$image_name;
		if($file_size < 5242880){
			if(move_uploaded_file($file_temp, $location)){
				try{
					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "INSERT INTO `image`(image_name, image_type, date_uploaded, location)  VALUES ('$image_name', '$file_type', '$date_uploaded', '$location')";
					$conn->exec($sql);
				}catch(PDOException $e){
					echo $e->getMessage();
				}
				
				$conn = null;
				header('location: index.php');
			}
		}else{
			echo "<center><h3 class='text-danger'>File too large to upload!</h3></center>";
		}
	}
?>




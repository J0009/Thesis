<?php
if(isset($_FILES) & !empty($_FILES)){
			$name= $_FILES['fimage']['name'];
			$size = $_FILES['fimage']['size'];
			$type = $_FILES['fimage']['type'];
			$tmp_name = $_FILES['fimage']['tmp_name'];

			$max_size = 20000000;
			$extension = substr($name,strpos($name,'.')+ 1);

			if(isset($name) && !empty($name)){
				if(($extension =="JPG" || $extension =="jpg" || $extension =="jpeg" && $type =="image/jpeg" && $extension == $size <= $max_size)){
					$location ="studentfolder/";
					if(move_uploaded_file($tmp_name,$location.$name)){
						echo "Uploaded successfully";
					}else{
						echo "Failed to upload File";
					}
				}else{
					echo "File size exceed";
				}
			}
		}
?>
<?php
	header("Content-Type: application/json");
	$ref = $_POST['ref'];
	$jsonData = '{';
	$folder = "img/gallery/thumbnails/";
	$dir = "../".$folder;
	$dirHandle= openDir($dir);
	$i = 0;
	while($file = readdir($dirHandle)){
		if(!is_dir($file) && strpos($file, '.jpg')){
			$i++;
			$src= "$folder$file";
			$jsonData .= '"img'.$i.'":{ "num": "'.$i.'", "src": "'.$src.'", "filename": "'.$file.'" },';
		}
	}
	closedir($dirHandle);
	$jsonData = chop($jsonData, ",");
	$jsonData .= '}';
	echo $jsonData;
?>
<?php

	$myfilename = "profiles/bogdan.txt";

	$myfile = fopen($myfilename, "r") or die("Unable to open file!");
	$content = fread($myfile,filesize($myfilename));
	fclose($myfile);

	$data = explode("#",$content);
	echo $data[0];
?>

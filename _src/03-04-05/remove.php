<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>templateDetails.xml generator REMOVE PRIOR TO PACAKGING!!</title>
	</head>
	<body>
<h2>Remove this file prior to packaging your template!</h2>	

<?php

$dir="html"; // change this to template directory where files are stored. "." = root.

if ($dir_list = opendir($dir)){

    if ($dir == "."){
	  $dir = "";
	}else{
	  $dir = $dir."/";
	}//if/else

	while(($filename = readdir($dir_list)) !== false){
	if ($filename != ".DS_Store" && $filename != "." && $filename != ".." && $filename != "remove.php" && $filename != "css" && $filename != "html" && $filename != "images" && $filename != "js"){
	?>

&lt;filename&gt;<?php echo $dir; ?><?php echo $filename; ?>&lt;/filename&gt;<br/>

<?php
	}//if
    }//while
closedir($dir_list);
}//if

?>


</body>
</html>
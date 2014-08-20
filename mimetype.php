<?php
/*
	Output modifier for Modx to retrieve the Mimetype of a TV file
	Requires PHP 5.3 or higer
*/

$finfo = finfo_open();
$basepath = $modx->config['base_path'];

$filename = $basepath.$input;

if(!empty($filename)){
	$fileinfo = finfo_file($finfo, $filename, FILEINFO_MIME);
	finfo_close($finfo);
	return $fileinfo;
}
?>
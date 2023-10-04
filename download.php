<?php
// Get the file name
$file = basename($_GET['file']);
// Set the content type and attachment header
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment;
filename="" . $file . """); 
// Read the file readfile($file); 
?>
<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
$filename = "coba.txt";
$source_file = fopen( $filename, "r" ) or die("teu bisa muka $filename");
while (!feof($source_file)) {
  $buffer = fread($source_file, 4096);  // use a buffer of 4KB
  // $buffer = str_replace($old,$new,$buffer); 
  echo $buffer."\n";
  ///
}
?>

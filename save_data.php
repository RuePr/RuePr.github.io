<?php
// the $_POST[] array will contain the passed in filename and data
// the directory "data" is writable by the server (chmod 777)
//https://github.com/RuePr/RuePr.github.io/tree/main/data
// $filename = "data/".$_POST['filename'];
$filename = "main/data/data.csv";
$data = $_POST['filedata'];
// write the file to disk
file_put_contents($filename, $data);
?>

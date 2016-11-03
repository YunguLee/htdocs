<?php
$file=$_FILES['upload'];
print_r($file);
print_r([$_SERVER]);
$file_dir=$_SERVER['DOCUMENT_ROOT']."\\fup\\";
print $file_dir;
print microtime();
$file_path=$file_dir.md5(microtime()).$file;
print $file_path;
move_upload_file($_FIELS['upload']['tmp_name'],$file_path)
?>
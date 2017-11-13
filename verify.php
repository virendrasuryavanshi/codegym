<?php
function compareFiles($file_a, $file_b)
{
    if (filesize($file_a) == filesize($file_b))
        if(sha1_file($file_a) == sha1_file($file_b))
        	if(md5_file($file_a) == md5_file($file_b))
        		return true;

    return false;
}

$file_a = "input/3.txt";
$file_b = "output/3.txt";

if(compareFiles($file_a, $file_b))
	echo "Files Matched";
else echo "files didn't match";

?>
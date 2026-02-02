<?php
#$name = "Akhlesh Reddy";
#echo str_word_count($name);
#$txt = "hello.txt"
#(str_contains($txt, "PHP"));

#$myfile = fopen("hello.txt", "r") or die("Error: Unable to open file!");
#echo fread($myfile, filesize("hello.txt"));
#echo filesize("hello.txt");
#fclose($myfile);

#$myfile = fopen("hello.txt", "r") or die("Unable to open file!");
#echo fgets($myfile);
#fclose($myfile);

$myfile = fopen("hello.txt", "w") or die("Unable to open file!");
$txt = "Akhilesh\n";
fwrite($myfile, $txt);
$txt = "BusiReddy\n";
fwrite($myfile, $txt);
#echo fgets($myfile);
$myfile = fopen("hello.txt", "r");
echo fread($myfile , filesize("hello.txt"));
fclose($myfile);
#fclose($myfile1);
?>
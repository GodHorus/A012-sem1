<?php
$myfile = fopen("rdwd.txt", "w") or die("Unable to open file!");
$txt = "Hi ,I am Sanket,Roll no A012 from batch B1. Vasai and persuing MCA from MPSTME\n";
fwrite($myfile, $txt);
$txt = "Hi ,I am Sanket,Roll no A012 from batch B1. Vasai and persuing MCA from MPSTME \n";
fclose($myfile);
?>
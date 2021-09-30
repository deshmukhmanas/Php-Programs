<?php

$new_file = fopen("new_file2.txt","w") or die ("Unable to open file!");

$text =  "I am Manas Deshmukh!";
fwrite($new_file,$text);

fclose($new_file);




?>
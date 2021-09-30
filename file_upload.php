<?php

echo "I am php file";

echo "</br>";


$target_dir = "files/";

//$_POST, $_GET, $_FILES
echo "<pre>".print_r($_FILES,true)."</pre>";



echo "</br>";

if($_FILES['file_upload']["type"] == "image/png" || $_FILES['file_upload']["type"] == "image/jpeg" ){

    echo "this is ".$_FILES['file_upload']["type"]." and file name is ". $_FILES['file_upload']["name"];

    echo "</br>";

    $target_file = $target_dir.basename($_FILES['file_upload']["name"]);

    //$uploadOk = 1;

    if(file_exists($target_file)){

       echo "Sorry, file already exists!";


    }else{


        if($_FILES['file_upload']["size"] > 80) // max size should be 5mb
        {

           echo "Sorry. File size is too large, please upload file less or equals to 80 KB!";

        }else{


            if(move_uploaded_file($_FILES['file_upload']["tmp_name"],$target_file)){

                echo "The file ". htmlspecialchars(basename($_FILES["file_upload"]["name"])). " has been uploaded!";
       
       
            }else{
       
                echo "Sorry, Please upload again, There is an error with uploading file!"; 
       
           }
            
        }

    }



    


}else{


    echo "Please select png, jpg or jpeg file!";
}

//


?>
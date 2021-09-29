<?php

class Project{

   const project_name = "School LMS";

   function test11(){

    $this->project_name = "Test";

    echo  $this->project_name;
    echo "Project name is " . self::project_name. ".";



   }

   
}


$test = new Project();
$test->test11();

echo "<br>";


//echo "Project name is " . Project::project_name. ".";

?>
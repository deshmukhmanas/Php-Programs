<?php
class Teacher
{
    public $name;
    public $email;
    public $address;
    public $phone;
    public $department;

    function set_teacher($name,$email,$address,$phone,$department)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
        $this->department = $department;
    }

    function get_teacher()
    {
        echo '<pre>'.print_r($this,true).'</pre>';
    }
}
$t1 = new Teacher();

if($t1 instanceof Teacher){
    $t1->set_teacher('John','j@gmail.com','Hatfield','4739593460','Computer Science');
    echo $t1->get_teacher();
    echo "</br>";
}
else{
    echo "<h1>404: Data Not Found</h1>";
}
?>
<?php
class Student
{
    public $name;
    public $email;
    public $address;
    public $phone;

    function set_student($name,$email,$address,$phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
    }
    function get_student()
    {
        echo '<pre>'.print_r($this,true).'</pre>';
    }
}

$s1 = new Student();

if ($s1 instanceof Student){
    $s1->set_student('Suyash Kale','kalesuyash@gmail.com','Ilford','7502072382');
    echo $s1->get_student();
    echo "</br>";
}
else{
    echo "<h1>404: Data Not Found</h1>";
}
?>
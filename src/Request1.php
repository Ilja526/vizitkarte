<?php
class Request1{
    public $name;
    public $lastname;
    public $age;
    function working(){
        $telephon=$_GET['Telephon'];
        echo '<br>';
        echo 'Telephon:',$telephon;
        echo '<br>';
        $gmail=$_GET['Gmail'];
        echo 'Gmail:',$gmail;
    }
}
$a=new Request1();
$uri = $_SERVER['REQUEST_URI'];
echo 'Mūsu uri:', $uri;
echo '<br>';
$a->name=$_GET['name'];
echo 'Name:'.$a->name;
echo '<br>';
$a->lastname=$_GET['Lastname'];
echo 'Lastname:'.$a->lastname;
echo '<br>';
$a->age=$_GET['Age'];
echo 'Age:'.$a->age;
$a->working();
?>
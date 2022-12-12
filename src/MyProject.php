<?php
class MyProject{
    public $projectName='vizitkarte';
    public $email='rvt.rvt.rvt@gmail.';
    public $cik_šeit_bus_faili='9';
    public $cik_bus_floder='4';

    public function hello(){
        $this->projectName. " - " . $this->email;
    }
}
$project=new MyProject();
echo $project->projectName;
echo $project->email;
echo $project->cik_šeit_bus_faili;
echo $project->cik_bus_floder;

class Myclass{
    public $name;
    public $value;
    public $time;

    public function __constructor($name,$value,$time){
        $this->name=$name;
        $this->value=$value;
        $this->time=$time;
    }
}
$class=new Myclass('Vards','12346','10:00');
echo $class->name;
?>
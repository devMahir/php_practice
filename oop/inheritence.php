<?php

class One{
    public $student = "100";
    public $section = "A";
    public $bench = "Backbancher";
    public $headteacher = "Nasima Maam";
    public $teacher = "Aziz sir";
}
class Two extends One{
    public $teacher = "Mujammel Sir";
    public $total = "56";
}

$obj = new Two();
echo $obj->headteacher;


?>
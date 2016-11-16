<?php
namespace Users;

class Course {
    private $name;
    private $hours;
    private $teachers;
    private $students;
    
    public function __construct ($name,$hours){
        $this->name = $name;
        $this->hours = $hours;
    }
    public function __toString (){
        return "Corsi: $this->name Orario: $this->hours";
    }
}

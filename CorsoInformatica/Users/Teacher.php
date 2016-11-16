<?php

namespace Users;

class Teacher extends Worker {
    
    use DigitalUser;
    
    private $name;
    private $age; 
    private $course;
    private $school;
    //$email e $company
    
    public function __construct ($name, $age,$email ){
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        
    }
    public function __toString (){
        
    }
    
    public function getCourse() {
        return $this -> course;
    }
    public function setCourse(Course $course){
        $this->course = $course;
    }
    public function getShool() {
        return $this -> school;
    }
    public function setSchool(School $school){
        $this->school = $school;
    }
    public function mostraSuoiAlunni(){
        $ciccio = $this->school;
       // $mieiAlunni;
        foreach ($ciccio->stundents as $student) {
            $corsiStudente= $student->getCourses();
            
          foreach($corsiStudenti as $corso){
              if($corso == $this->course){
                  echo $student->getName();
                  // array_push($mieiAlunni,$student);
              }
          } 
        }
       // return $mieiAlunni;
    }
}

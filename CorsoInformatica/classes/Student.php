<?php

require_once 'Person.php';
require_once 'DigitalUser.php';

class Student implements Person{
    
    use DigitalUser;
    
    private $name;
    private $age;
    private $courses;
    
    public function getCourses() {
         return $this->courses;
    }
    public function addCourse(Course $course) {
        array_push($this->courses,$course);
    }
    public function resetCourses() {}
    
    //metodi dell'interfaccia
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = $age;
    } 
    public function __construct($name,$age,$email, $courses=[]) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->courses = $courses;
    }
    public function __toString(){
        
        $stringA= "";
        foreach ($this->courses as $course){
            $stringA.='<br>'.$course;
        }
       /* $quanti_corsi = count($courses);
        for ($i=0;i<$quanti_corsi;i++){
            echo $courses[$i] . "<br/>";
        }*/
           return "Nome:  $this->name Età: $this->age Email:  $this->email Corsi: $courses";
    }
}
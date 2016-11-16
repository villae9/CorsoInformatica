<?php

require_once 'Person.php';
require_once 'DigitalUser.php';

class Student implements Person{
    
    use DigitalUser;
    
    private $name;
    private $age;
    private $courses;
    
    public function getCourses() {}
    public function addCourse(Course $s) {}
    public function resetCourses() {}
    public function getName(){}
    public function setName($name){}
    public function getAge(){}
    public function setAge($age){}
    
    public function __construct($name,$age,$email, $courses=[]) {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->courses = $courses;
    }
}
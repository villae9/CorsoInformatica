<?php

namespace Users;

    class School {
        private $name;
        private $students;
        private $courses;
        
        public function __construct ($name){
            $this->name = $name;
        }
        public function addStudent (Student $stud){
            array_push($this->students,$stud);
        }
        public function getStudents (){
            return $this->students;
        }
        public function addCourse (Course $course){
            array_push($this->courses,$course);
        }
}
<?php


namespace Users;


abstract class Worker {
    
    private $company;
    
    public function getCompany(){
        return $this -> company;
    }
    public function setCompany($c){
         $this->company = $c;
    }
}

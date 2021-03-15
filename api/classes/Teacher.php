<?php
namespace App;
use App\Database;

class Teacher extends Database{

  public $name;
  public $salary;
  public $students;
  public $subjects;
  
  public $required = [
    'name','salary'
  ];


  function is_teacher_awesome(){
    if($this->salary > 100){
      return 'teacher is awesome';
    }
    return 'teacher is not';
  }





}








?>
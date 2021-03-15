<?php
namespace App;
use App\Database;


class Student extends Database{
    
  public $name;
  public $sem;
  public $result;
  public $required = [
    'name','sem'
  ];

  

  function is_student_awesome(){
    return 'yes he is awesome';
  }
}
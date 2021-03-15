<?php
namespace App;
use Jajo\JSONDB;

class Database{

  public $table_name;
  private $db; 

  function __construct(){
    $path = explode('\\', get_called_class());
    $this->table_name = array_pop($path);
    $this->db = new JSONDB('./db');
  }

  function insert($data){
    $data['id'] = uniqid('_id',true);
    return  $this->db->insert( $this->table_name,$data);
  }

  function getAll(){
    $return_obj=[];
    $table_data = $this->db->select( '*' )
	  ->from( $this->table_name )
    ->get();
    foreach($table_data as $data){
        $return_obj[] = $this->get_class_obj($data);
    }
    return $return_obj;
  }



  public function check_fields($data){
    $class = new static();
    $required_fields = $class->required; 
    foreach($required_fields as $field){
      if(!array_key_exists($field,$data)){
        return false;
      }
    }
    return true;
  }
  public function add($data){
    if(!$this->check_fields($data)){
      return [
        'status' => false,
        'error' => $this->table_name.' some fields are missing'
      ];
    }
    $class = new static();
    $error_attr = null;
    foreach($data as $attr=>$val){
        if(property_exists($class , $attr)){
            $this->$attr = $val;
        }else{
          $error_attr = $attr;
        }
    }
    if(!$error_attr){
      $id = $this->insert($data);
      return [
        'status' => true,
        'message'=> $this->table_name.' added Successfully !'
      ];
    }

    return [
      'status' => false,
      'error' => $this->table_name.' attribute "'.$error_attr.'" is inavalid'
    ];
  }


  public static function get_class_obj($data){
     $obj = new static();
    foreach($data as $attr=>$val){
      $obj->$attr = $val;
    }
    return $obj;
  }


}
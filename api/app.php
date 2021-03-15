<?php
require 'vendor/autoload.php';
use App\Student;
use App\Teacher;

$student = new Student();
$x = $student->getAll();
print_r(json_encode($x));
// $student->insert();
// $x = $student->add([
//       'name'=>'sum',
//       'sem' => 2,
//       'result' => [
//           'che' => 20,
//           'phy' => 40
//         ]
//     ]);
// print_r(json_encode($x));




// $teacher = new Teacher();
// $teachers = $teacher->getAll();
// foreach($teachers as $teacher){
//   print_r($teacher->is_teacher_awesome());
//   echo "/n";
// }


// $x = $teacher->add([
//   'name'=>'sum',
//   'salary' => 200,
//   'students' => [
//       'che' => 20,
//       'phy' => 40
//     ]
// ]);
// print_r(json_encode($x));
// $result = $student->add(
//   [
//     'name'=>'sum',
//     'sem' => 2,
//     'result' => [
//         'che' => 20,
//         'phy' => 40
//       ]
//   ]
// );



// print_r($result);

// $student->get_class_obj();
// $users = $json_db->select( '*' )
// 	->from( 'users.json' )
// 	->get();








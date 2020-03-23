<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  private $students;

  public function __construct() {
    $this->students = config('students.students');
  }

  public function filter(Request $request) {
     $students = $this->students;

     $typeRequest = [
         'eta',
         'nome',
         'genere'
     ];
     $data = $request->all();



     foreach ($data as $key => $value) {
        if(!in_array($key, $typeRequest)) {
          unset($data[$key]);
        }
     }
     //var_dump($data);

    $studentsFiltered = [];
     foreach ($data as $key => $value) {
         if(array_key_first($data) == $key) {
           $studentsFiltered = $this->filterFor($key, $value, $students);
         }
         else {
             $studentsFiltered = $this->filterFor($key, $value, $studentsFiltered);
         }
     }
     //var_dump($studentsFiltered);

     return response()->json($studentsFiltered);
   }

   private function filterFor($type, $value, $array)
   {


     $filtered = [];
     foreach ($array as $element) {
        if ($element[$type] == $value) {
          $filtered[] = $element;
        }
      }
     return $filtered;
   }

}

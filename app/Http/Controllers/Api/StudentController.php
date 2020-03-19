<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
  public function gender(Request $request)
   {
     $data = $request->all();
     dd($gender);

     $genders = confing('students.genders');
     $students = confing('students.students');
  }
}

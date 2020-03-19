<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  private $students;
  private $genders;

  public function __construct()
  {
    $this->students = config('students.students');
    $this->genders = config('students.genders');
  }

  public function index()
    {
      $data = [
              'students'=> $this->students,
              'genders'=> $this->genders,
      ];
      return view('students.index', $data);
    }

  public function show($id)
    {
      if(!array_key_exists($id, $this->students)) {
        abort('404');
      }
      $student = $this->students[$id];
      return view('students.show', compact('student'));
    }
}

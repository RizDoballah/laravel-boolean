<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
  private $students;
  public function __construct()
  {
    $this->students = config('students.students');
  }
  public function index()
    {
      // $students = $this->students;
      // return view('students.index', compact('students'));
      return view('students.index');
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

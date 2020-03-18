@extends('layouts.layout')
@section('main')

  <div class="students">
    @foreach (config('students.students') as $student)
      <div class="student">
        <img src="{{$student['img']}}" alt="{{$student['nome']}}">
        <h3>{{$student['nome']}} ({{$student['eta']}} anni)</h3>
        <h4>assunt{{($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} come {{$student['ruolo']}}</h4>
        <p>{{$student['descrzione']}}</p>
      </div>

    @endforeach

  </div>

@endsection

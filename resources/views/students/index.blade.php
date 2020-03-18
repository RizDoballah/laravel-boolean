@extends('layouts.layout')
@section('main')

  <div class="students">
    @foreach (config('students.students') as $student)
      <div class="student">
        <div class="info">
          <div class="image">
            <img src="{{$student['img']}}" alt="{{$student['nome']}}">
          </div>
          <div class="text">
            <h3>{{$student['nome']}} ({{$student['eta']}} anni)</h3>
            <h4>assunt{{($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} come {{$student['ruolo']}}</h4>
        </div>
        </div>
          <p>{{$student['descrzione']}}</p>
      </div>

    @endforeach

  </div>

@endsection

@extends('layouts.layout')
@section('main')
  <div class="container-students">
    <div class="students">
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
    </div>

  </div>


@endsection

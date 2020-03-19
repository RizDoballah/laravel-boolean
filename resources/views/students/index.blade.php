@extends('layouts.layout')
@section('main')

  <select class="filter" name="filter">
    <option value="all">All</option>
    @foreach ($genders as $gender)
      <option value="{{$gender}}">{{($gender) == 'm' ? 'uomo' : 'donna'}}</option>
    @endforeach

  </select>

  <div class="students">
    @foreach ($students as $key => $student)
      <div class="student">
        <div class="info">
          <div class="image">
            <img src="{{$student['img']}}" alt="{{$student['nome']}}">
          </div>
          <div class="text">
            <a href="{{route('student.show', ['id' => $key])}}"><h3>{{$student['nome']}} ({{$student['eta']}} anni)</h3></a>
            <h4>assunt{{($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} come {{$student['ruolo']}}</h4>
        </div>
        </div>
          <p>{{$student['descrzione']}}</p>
      </div>

    @endforeach

  </div>

@endsection
@section('scripts')
  <script src="{{asset('js/app.js')}}" charset="utf-8"></script>

@endsection

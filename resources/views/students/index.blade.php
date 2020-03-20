@extends('layouts.layout')
@section('main')

  <div class="filter">
    <input type="text" name="name" id="name" placeholder="inserisci il nome">
    <input type="text" name="company" id="company" placeholder="inserisci l'azienda">
    <input type="text" name="role" id="role" placeholder="inserisci il ruolo">
    <input type="text" name="age" id="age"  placeholder="inserisci l'età">
    <select name="gender" id="gender">
      <option value="">all</option>
      <option value="m">uomo</option>
      <option value="f">donna</option>
    </select>
    <input id="filter-button" type="submit" value="cerca">
  </div>

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

@extends('layouts.layout')
@section('main')

  <div class="filter">
    <input type="text" name="nome" id="nome" placeholder="inserisci il nome">
    <input type="text" name="azienda" id="azienda" placeholder="inserisci l'azienda">
    <input type="text" name="ruolo" id="ruolo" placeholder="inserisci il ruolo">
    <input type="text" name="eta" id="eta"  placeholder="inserisci l'età">
    <select name="genere" id="genere">
      <option value="">all</option>
      <option value="m">uomo</option>
      <option value="f">donna</option>
    </select>
    <input id="filter-button" type="submit" value="cerca">
  </div>

  <div class="container-students">
    <h2>I nostri ex studenti su LinkedIn</h2>
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

  </div>

@endsection
@section('scripts')
  <script id="entry-template" type="text/x-handlebars-template">
    <div class="student">
      <div class="info">
        <div class="image">
          <img src="@{{img}}" alt="@{{name}}">
        </div>
        <div class="text">
          <h3>@{{nome}} (@{{eta}} anni)</h3>
          <h4>lavora da @{{azienda}} come @{{ruolo}}</h4>
        </div>
      </div>
      <p>@{{descrzione}}</p>
    </div>

  <script src="{{asset('js/app.js')}}" charset="utf-8"></script>

@endsection

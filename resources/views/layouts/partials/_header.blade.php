<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>laravel-boolean</title>
  </head>
  <body>
    {{-- Container --}}
    <div class="container">
      <nav class="navbar">
        <div class="logo">
          <img src="https://www.boolean.careers/images/common/logo.png" alt="logo">
        </div>
        <ul class="nav-menu">
          <li><a class="{{(Request::route()->getName() == 'home.index') ? 'active' : ''}}" href="{{route('home.index')}}">Home</a></li>
          <li><a href="#">Corso</a></li>
          <li><a class="{{(Request::route()->getName() == 'student.index') ? 'active' : ''}}" href="{{route('student.index')}}">Dopo Corso</a></li>
          <li><a href="#">Lezione Gratuita</a></li>
          <li><a class="btn" href="#">Candidati Ora</a></li>
        </ul>
      </nav>

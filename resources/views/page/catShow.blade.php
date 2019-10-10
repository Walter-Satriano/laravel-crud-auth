@extends('layouts.main-layout')

@section('content')

  <div class="box-cont">
    <div class="box">
      <p>NAME: {{ $cat -> name }}</p>
      <p>RACE: {{ $cat -> race }}</p>
      <p>ID NUMBER: {{ $cat -> cat_rfid }}</p>
    </div>
  </div>

@endsection

@extends('layouts.main-layout')

@section('content')

  <div class="box-cont">
    @foreach ($cats as $cat)
      <div class="box">
        <p>CAT'S NAME: {{ $cat -> name }}</p>
        <a href="{{ route('cat.show', $cat -> id) }}">SHOW MORE DETAILS</a>
      </div>
    @endforeach
  </div>

@endsection

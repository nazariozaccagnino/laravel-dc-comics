@extends('layouts.app')

@section('title', $comic->title)

@section('content')
<section class="container">
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{$comic->thumb}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$comic->title}}</h5>
        <p class="card-text">{{$comic->description}}</p>
        <p class="card-text"><small class="text-body-secondary">Sale date: {{$comic->sale_date}}</small></p>
      </div>
      <a href="{{route('comics.index')}}" class="btn btn-primary btn-sm">Return</a>
    </div>
  </div>
</div>

</section>
@endsection
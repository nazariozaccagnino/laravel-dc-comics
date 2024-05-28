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
      <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</a>
    </div>
  </div>
</div>

<!-- Invisible modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
          @csrf
          @method('DELETE');
          <button type="submit" class="btn btn-danger">Yes, delete</button>
        </form>        
      </div>
    </div>
  </div>
</div>
</section>
@endsection
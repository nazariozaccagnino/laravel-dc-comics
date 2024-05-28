@extends('layouts.app')

@section('title', 'Edit Item')

@section('content')

<div class="container">
<form action="{{route('comics.update', $comic->id)}}" method="POST">
@csrf
@method('PUT')
  <div class="mb-3">
    <label for="title" class="form-label" >Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
  </div>
  <div class="mb-3">
  <label for="description" class="form-label" >Description</label>
    <input type="text" class="form-control" id="description" name="description" value="{{$comic->description}}">
  </div>
  <div class="mb-3">
    <label for="thumb" class="form-label" >Image link</label>
    <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label" >Price</label>
    <input type="number" class="form-control" id="price" name="price" value="{{$comic->price}}">
  </div>
  <div class="mb-3">
    <label for="series" class="form-label" >Series</label>
    <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
  </div>
  <div class="mb-3">
    <label for="sale_date" class="form-label" >Sale date</label>
    <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
  </div>
  <div class="mb-3">
    <label for="tyoe" class="form-label" >Type</label>
    <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
  </div>
  <button type="submit" class="btn btn-primary">Modify</button>
</form>
</div>
@endsection
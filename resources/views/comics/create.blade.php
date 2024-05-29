@extends('layouts.app')

@section('title', 'Create')

@section('content')
<section>
  <div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{route('comics.store')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Insert a title">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Insert a description">
      </div>
      <div class="mb-3">
        <label for="thumb" class="form-label">Image link</label>
        <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert an image link">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Insert item price">
      </div>
      <div class="mb-3">
        <label for="series" class="form-label">Series</label>
        <input type="text" class="form-control" id="series" name="series" placeholder="Insert the series name">
      </div>
      <div class="mb-3">
        <label for="sale_date" class="form-label">Sale date</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date">
      </div>
      <div class="mb-3">
        <label for="tyoe" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="Insert the item type">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</section>
@endsection
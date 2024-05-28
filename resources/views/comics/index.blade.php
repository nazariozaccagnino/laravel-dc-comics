@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<section>
    <div class="container">
    @if (session()->has('alert'))
        <div class="alert alert-danger py-2" role="alert">
            Item deleted!
        </div>
    @endif
    @if (session()->has('done'))
        <div class="alert alert-success py-2" role="alert">
            Item added correctly!
        </div>
    @endif
        <div class="row row-cols-4 g-4 py-4">
            @foreach ($comics as $comic)           
                <div class="col">
                    <div class="card h-100">
                        <img src="{{$comic->thumb}}" class="card-img-top thumb h-100" alt="descr">
                        <div class="card-body">
                            <h6 class="card-title">{{$comic->title}}</h6>
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary btn-sm">Show all
                                    info</a>
                                <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-secondary btn-sm">Edit
                                    Item</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<section>
    <div class="container d-flex flex-wrap">
        @foreach ($comics as $comic)
            <div class="row">
                <div class="col p-2 m-2">
                    <div class="card">
                        <img src="{{$comic->thumb}}" class="card-img-top thumb" alt="descr">
                        <div class="card-body">
                            <h6 class="card-title">{{$comic->title}}</h6>
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary btn-sm">Show all info</a>
                                <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-secondary btn-sm">Edit Item</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        @endforeach
    </div>

</section>
@endsection
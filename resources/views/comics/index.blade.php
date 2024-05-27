@extends('layouts.app')

@section('title', 'Comics')

@section('content')

<section>
    <div class="container d-flex flex-wrap">
        @foreach ($comics as $items)
            <div class="row">
                <div class="col p-2 m-2">
                    <div class="card">
                        <img src="{{$items->thumb}}" class="card-img-top thumb" alt="descr">
                        <div class="card-body">
                            <h6 class="card-title">{{$items->title}}</h6>
                            <!-- <p class="card-text">{{$items['description']}}</p> -->
                            <div class="d-flex justify-content-between mt-4">
                                <a href="{{route('comics.show', $items->id)}}" class="btn btn-primary btn-sm">Show all info</a>
                                <a href="{{route('comics.edit', $items->id)}}" class="btn btn-secondary btn-sm">Edit Item</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        @endforeach
    </div>

</section>
@endsection
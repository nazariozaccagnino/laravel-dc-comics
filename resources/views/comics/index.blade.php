@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section>
    <div class="container d-flex flex-wrap">
        @foreach ($comics as $items)
            <div class="row">
                <div class="col p-2 m-2">
                    <div class="card">
                        <img src="{{$items->thumb}}" class="card-img-top thumb" alt="descr">
                        <div class="card-body">
                            <h6 class="card-title">{{$items->series}}</h6>
                            <!-- <p class="card-text">{{$items['description']}}</p> -->
                        </div>
                    </div>
                </div>

            </div>

        @endforeach
    </div>

</section>
@endsection
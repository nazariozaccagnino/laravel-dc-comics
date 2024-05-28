@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="jumbo">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbo">
</div>
<section>
    <div class="container d-flex justify-content-center">
        <div class="p-4 homecard">
            <div class="card">
                <h5 class="card-header">Welcome to the DC website</h5>
                <div class="card-body">
                    <h5 class="card-title">Join the DC community</h5>
                    <p class="card-text">Click on the button to explore the entire DC comics database</p>
                    <a href="{{route('comics.index')}}" class="btn btn-primary">Show all DC comics</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="jumbo">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbo">
</div>
<section>
    <div class="container">
        <div class="text-center">
        The DC comics homepage

        </div>
    </div>

</section>

@endsection

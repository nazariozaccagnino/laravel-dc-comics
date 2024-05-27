@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="jumbo">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbo">
</div>
<section>
    <div class="container d-flex flex-wrap">
        main cards
    </div>

</section>

@endsection

@extends('layouts.base')




@section('content')
    <div class="jumbotron">
        <h1>Witaj {{Auth::user()->name}}</h1>
        <p>Twórz swoje notatki! Możliwość dodawania, edycja oraz usuwania notatek.</p>
        <p>
            <a class="btn btn-lg btn-primary" href="{{route('notebooks.index')}}" role="button">Twój notatnik</a>
        </p>
    </div>
@endsection

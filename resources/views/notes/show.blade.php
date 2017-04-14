@extends('layouts.base')

@section('content')

    <div class="container">
        <div class="row">
            <h1 class="display-1">{{$note->title}}</h1>

            <p>{{$note->body}}</p>
        </div>
    </div>
    @endsection
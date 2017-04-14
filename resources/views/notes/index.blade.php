@extends('layouts.base')


@section('content')
<!-- Main component for call to action -->
<div class="container">
    <h1 class="pull-xs-left">
        Notes
    </h1>
    <div class="pull-xs-right">
        <a class="btn btn-primary" href="#" role="button">
            New Note +
        </a>
    </div>
    <div class="clearfix">
    </div>
    <!--============= notes=========== -->
    <div class="list-group notes-group">

        <!--note1 -->

        @foreach($notes as $note)
        <div class="card card-block">
            <a href="#">
                <h4 class="card-title">
                    {{$note->title}}
                </h4>
            </a>
            <p class="card-text">
                 {{$note->body}}
            </p>
            <a class="btn btn-sm btn-info pull-xs-left" href="#">
                Edit
            </a>
            <form action="#" class="pull-xs-right" method="POST">
                <input class="btn btn-sm btn-danger" type="submit" value="Delete">

            </form>
        </div>
        @endforeach
    </div>
</div>
<!-- /container -->
@endsection
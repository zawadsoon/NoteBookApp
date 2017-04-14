@extends('layouts.base')

@section('content')


    <div class="container">

        <h1>Stwórz notatkę</h1>

        <form action="{{route('notes.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Tytuł notatki</label>
                <input class="form-control" type="text" name="title">

            </div>

            <div class="form-group">
                <label for="body">Tekst notatki</label>
                <input class="form-control" type="text" name="body">

            </div>

            <input type="hidden" name="notebook_id" value="{{$id}}">

            <input class="btn btn-primary" type="submit" value="Zapisz">
        </form>
    </div>
@endsection
@extends('layouts.base')

@section('content')


<div class="container">

    <h1>Stwórz notebooks</h1>

        <form action="/notebooks" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Notebook name</label>
                <input class="form-control" type="text" name="name">

            </div>

            <input class="btn btn-primary" type="submit" value="Zapisz">
        </form>
 </div>
@endsection
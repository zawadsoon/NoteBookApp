@extends('layouts.base')

@section('content')


<div class="container">

    <h1>Stwórz notatkę</h1>

        <form action="/notebooks" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">Nazwa notatki</label>
                <input class="form-control" type="text" name="name">

            </div>

            <input class="btn btn-primary" type="submit" value="Zapisz">
        </form>
 </div>
@endsection
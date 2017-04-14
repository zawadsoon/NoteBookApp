@extends('layouts.base')

@section('content')


    <div class="container">

        <h1>Edytuj notebook</h1>

        <form action="/notebooks/{{$notebook->id}}" method="post">
            {{csrf_field()}}
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="name">Notebook name</label>
                <input class="form-control" type="text" name="name">

            </div>

            <input class="btn btn-primary" type="submit" value="Zapisz">
        </form>
    </div>
@endsection
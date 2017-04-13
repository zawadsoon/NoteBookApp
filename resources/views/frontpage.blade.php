<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>NoteBook App</title>
    <link href="{{asset('dist/css/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
<div class="container-fluid">
    <nav class="navbar  navbar-dark bg-primary">
        {{--<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">--}}
            {{--&#9776;--}}
        {{--</button>--}}
        <div class="collapse navbar-toggleable-xs" id="navbar-header">
            <a class="navbar-brand" href="#">NoteBook App</a>
        </div>

    </nav>
    <!-- /navbar -->
    <!-- Main component for call to action -->
    <div class="jumbotron">
        <h1>Notebook</h1>
        <p>Store and organise your thoughts in notebook and NoteBook web app makes this easier than ever</p>
        <p>
            <a class="btn btn-lg btn-primary" href="notebooks.html" role="button">Your NoteBooks</a>
        </p>
    </div>
</div>
<!-- /container -->

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>

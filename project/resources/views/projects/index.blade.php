<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projects</title>
    </head>
    <body>
        <h1>Projects</h1>
        <ul>
            @foreach ($projects as $proj)
                <li>{{$proj->title}}</li>
            @endforeach
        </ul>
    </body>
</html>

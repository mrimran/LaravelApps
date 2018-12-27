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
                <li>
                    <a href="/projects/{{$proj->id}}">
                        {{$proj->title}}
                    </a>
                </li>
            @endforeach
        </ul>
    </body>
</html>

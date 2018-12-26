<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projects >> Create</title>
    </head>
    <body>
        <h1>Create a New Project</h1>
        <form method="POST" action="/projects">
            {{csrf_field()}}
            <div>
                <input type="text" name="title" placeholder="Project title">
            </div>

            <div>
                <textarea name="description" placeholder="Project description"></textarea>
            </div>
            <div>
                <button type="submit">Create Project</button>
            </div>
        </form>
    </body>
</html>

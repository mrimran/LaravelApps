@extends('layout')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="POST" action="/projects/{{$project->id}}" style="margin-bottom: 1em;">
        @method('PATCH')
        @csrf
        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
            <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" placeholder="Title" value="{{$project->title}}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" required>{{$project->description}}</textarea>
            </div>
        </div>

        <div class="field">   
            <div class="control">
                <button type="submit" class="button is-link">Update Project</button>
            </div>
        </div>
        @if ($errors->any())
            <div class="notification is-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>

    <form method="POST" action="/projects/{{$project->id}}">
        @method('DELETE')
        @csrf

        <div class="field">   
            <div class="control">
                <button type="submit" class="button">Delete Project</button>
            </div>
        </div>
    </form>
@endsection
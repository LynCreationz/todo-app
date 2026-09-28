@extends('layouts.app')
@section('title', 'Rename project')
@section('content')
<section class="card"><h1>Rename project</h1><form method="POST" action="{{ route('projects.update', $project) }}">@csrf @method('PUT')<label for="name">Project name</label><input id="name" name="name" value="{{ old('name', $project->name) }}" maxlength="255" required autofocus><p><button type="submit">Save name</button> <a class="link" href="{{ route('projects.index') }}">Cancel</a></p></form></section>
@endsection

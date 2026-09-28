@extends('layouts.app')
@section('title', 'My projects')
@section('content')
<div class="row"><div><h1>My projects</h1><p class="muted">Keep track of the projects you are working on.</p></div><a class="button" href="{{ route('projects.create') }}">Add project</a></div>
@forelse ($projects as $project)
    <section class="card row"><strong>{{ $project->name }}</strong><div class="actions"><a class="link" href="{{ route('projects.edit', $project) }}">Rename</a><form method="POST" action="{{ route('projects.destroy', $project) }}" onsubmit="return confirm('Delete this project?')">@csrf @method('DELETE')<button class="danger" type="submit">Delete</button></form></div></section>
@empty
    <section class="card"><p>You do not have any projects yet.</p><a class="button" href="{{ route('projects.create') }}">Add your first project</a></section>
@endforelse
@endsection

@extends('layouts.app')
@section('title', 'Add project')
@section('content')
<section class="card"><h1>Add a project</h1><form method="POST" action="{{ route('projects.store') }}">@csrf<label for="name">Project name</label><input id="name" name="name" value="{{ old('name') }}" maxlength="255" required autofocus><p><button type="submit">Add project</button> <a class="link" href="{{ route('projects.index') }}">Cancel</a></p></form></section>
@endsection

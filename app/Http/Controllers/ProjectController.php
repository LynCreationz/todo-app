<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(Request $request): View
    {
        return view('projects.index', ['projects' => $request->user()->projects()->latest()->get()]);
    }

    public function create(): View
    {
        return view('projects.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate(['name' => ['required', 'string', 'max:255']]);
        $request->user()->projects()->create($validated);

        return to_route('projects.index')->with('status', 'Project created.');
    }

    public function edit(Request $request, int $project): View
    {
        return view('projects.edit', ['project' => $request->user()->projects()->findOrFail($project)]);
    }

    public function update(Request $request, int $project): RedirectResponse
    {
        $ownedProject = $request->user()->projects()->findOrFail($project);
        $ownedProject->update($request->validate(['name' => ['required', 'string', 'max:255']]));

        return to_route('projects.index')->with('status', 'Project renamed.');
    }

    public function destroy(Request $request, int $project): RedirectResponse
    {
        $request->user()->projects()->findOrFail($project)->delete();

        return to_route('projects.index')->with('status', 'Project deleted.');
    }
}

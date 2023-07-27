@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <img class="my-4" src="{{ asset('storage/' . $project->picture) }}" alt="">
        <h1>{{ $project->name }}</h1>
        <p>
            {{ $project->description }}
        </p>
        <div class="row my-3">
            <span class="col bg-dark text-light">
                Start date : {{ $project->starting_date }}
            </span>
            <span class="col bg-dark text-light">
                End date : {{ $project->ending_date }}
            </span>
        </div>
        <div class="row my-3">
            <span class="col bg-dark text-light">
                Type: {{ $project->type->name }}
            </span>
            <span class="col bg-dark text-light">
                Difficulty: {{ $project->difficulty }}
            </span>
        </div>
        <div class="row my-3">
            <span class="col bg-dark text-light">
                Technologies:
                @if (count($project->technologies) > 0)
                    @foreach ($project->technologies as $technology)
                        @if ($loop->last)
                            {{ $technology->name }}
                        @else
                            {{ $technology->name }},
                        @endif
                    @endforeach
                @else
                    NO TECHNOLOGY
                @endif
            </span>
        </div>
        <div class="row">
            <a class="btn btn-primary" href="{{ route('project.edit', $project->id) }}">EDIT</a>
        </div>
    </div>
@endsection

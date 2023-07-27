@extends('layouts.app')
@section('content')
    <div class="container text-center">
        <h1>Hello,
            @auth
                {{ Auth::user()->name }}!
                <a class="btn btn-primary" href="{{ route('project.create') }}">+</a>
            @endauth
            @guest
                World!
            @endguest
        </h1>
        <ul class="list-unstyled">
            @foreach ($projects as $project)
                <li>
                    @auth
                        <a href="{{ route('project.show', $project->id) }}"> {{ $project->name }}</a>
                    @endauth
                    @guest
                        {{ $project->name }}
                    @endguest
                </li>
            @endforeach
        </ul>
    </div>
@endsection

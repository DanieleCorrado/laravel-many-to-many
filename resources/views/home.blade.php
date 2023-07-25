@extends('layouts.app')
@section('content')
    <div class="mt-5">
        <h1 class="text-center mt-2">Project List</h1>
        <ul class="text-center list-unstyled mt-3">
            @foreach ($projects as $project)
                <li class="mt-2"> {{ $project->title }} </li>
            @endforeach
        </ul>
    </div>
@endsection

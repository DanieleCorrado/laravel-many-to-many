@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 my-4 text-center">
            Dashboard
        </h2>
        <div class="mt-5">
            <h1 class="text-center mt-2">Project List</h1>
            <div class="d-flex justify-content-between mt-5">
                @foreach ($projects as $project)
                    <div class="border border-dark p-3">
                        <ul class="list-unstyled ">
                            <li class="mt-2"> Nome progetto: {{ $project->title }} </li>
                            <li class="mt-2"> Capo progetto: {{ $project->project_leader }} </li>
                            @foreach ($types as $type)
                                @if ($project->type_id === $type->id)
                                    <li class="mt-2"> Tipo progetto: {{ $type->name }} </li>
                                @endif
                            @endforeach
                            <li class="mt-2"> Data inizio progetto: {{ $project->starting_date }} </li>
                            <li class="mt-2"> Priorita': {{ $project->priority }} </li>

                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

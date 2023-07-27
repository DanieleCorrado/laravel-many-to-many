@extends('layouts.app')

@section('content')
    <div class="container text-center">

        <h1>Create new Project</h1>

        <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <label for="picture">PICTURE</label>
            <input type="file" name="picture" id="picture">
            <br>
            <label for="name">NAME</label>
            <br>
            <input type="text" name="name" id="name">
            <br>
            <label for="description">DESCRIPTION</label>
            <br>
            <input type="text" name="description" id="description">
            <br>
            <label for="start_date">START DATE</label>
            <br>
            <input type="date" name="starting_date" id="starting_date">
            <br>
            <label for="end_date">END DATE</label>
            <br>
            <input type="date" name="ending_date" id="ending_date">
            <br>
            <label for="difficulty">DIFFICULTY</label>
            <br>
            <input type="text" name="difficulty" id="difficulty">
            <br>
            <label for="type_id">Type</label>
            <br>
            <select name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
            <br>
            @foreach ($technologies as $technology)
                <div class="form-check mx-auto" style="max-width: 300px">
                    <input class="form-check-input" type="checkbox" value="{{ $technology->id }}" name="technologies[]"
                        id="technology-{{ $technology->id }}">
                    <label class="form-check-label" for="technology-{{ $technology->id }}">
                        {{ $technology->name }}
                    </label>
                </div>
            @endforeach

            <input class="my-3" type="submit" value="CREATE">

        </form>

    </div>
@endsection

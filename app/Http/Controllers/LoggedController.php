<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LoggedController extends Controller
{
    public function show($id) {
        
        $project = Project :: findOrFail($id);

        return view('show', compact('project'));
    }

    public function create() {

        $types = Type :: all();
        $technologies = Technology :: all();

        return view('create', compact('types', 'technologies'));
    }

    public function store(Request $request) {

        $data = $request -> all();

        $data['picture'] = Storage :: put('uploads', $data['picture']);

        $project = Project :: create($data);
        if($data['technologies']) {
            $project -> technologies() -> attach($data['technologies']);
        }

        return redirect() -> route('project.show', $project -> id);
    }

    public function edit($id) {

        $types = Type :: all();
        $technologies = Technology :: all();

        $project = Project :: findOrFail($id);

        return view('edit', compact('types', 'technologies', 'project'));
    }

    public function update(Request $request, $id) {

        $data = $request -> all();

        $project = Project :: findOrFail($id);
        $project -> update($data);

        $project -> technologies() -> sync(
            array_key_exists('technologies', $data)
            ? $data['technologies']
            : []);

        return redirect() -> route('project.show', $project -> id);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archetype;

class ArchetypeController extends Controller
{
    public function index()
    {
        $class = Archetype::orderBy('name')->get();
        return inertia('Rules/ArchetypeIndex', [
            'classes' => $class
        ]);
    }

    public function create()
    {
        return inertia('Rules/ArchetypeCreate');
    }

    public function show(Archetype $class)
    {
        $class->load(['features','feats']);
        return inertia('Rules/ArchetypeShow', [
            'class' => $class
        ]);
    }

    public function store(){

    }


    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ancestry;


class AncestryController extends Controller
{
    public function index()
    {
        $ancestries = Ancestry::orderBy('name')->get();
        return inertia('Rules/AncestriesIndex', [
            'ancestries' => $ancestries
        ]);
    }

    public function create()
    {
        return inertia('Rules/AncestriesCreate');
    }

    public function show(Ancestry $ancestry)
    {
        $ancestry->load('heritages');
        return inertia('Rules/AncestriesShow', [
            'ancestry' => $ancestry
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchetypeFeatureController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        return inertia('Rules/AncestriesCreate');
    }

    public function show(Ancestry $ancestry)
    {
        
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

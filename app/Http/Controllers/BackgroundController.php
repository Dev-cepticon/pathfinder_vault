<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Background;

class BackgroundController extends Controller
{
    public function index(){
        $background = Background::orderBy('name')->get();
        return inertia('Rules/BackgroundIndex', [
            'background' => $background
        ]);
    }

    public function create(){
        
    }

    public function show(Background $background){
        return inertia('Rules/BackgroundShow', [
            'background' => $background
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

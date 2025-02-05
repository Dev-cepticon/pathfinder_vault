<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feat;

class FeatController extends Controller
{
    public function index(){
        $feats = Feat::orderBy('level')->get();
        return inertia('Rules/FeatsIndex', [
            'feats' => $feats
        ]);
    }

    public function create(){
        
    }

    public function show(Feat $feat){
        return inertia('Rules/FeatsShow', [
            'feat' => $feat
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Painting;

class PaintingController extends Controller
{
    public function index()
    {
        $paintings = Painting::all();
        return view('paintings.index', compact('paintings'));
    }

    public function create()
    {
        return view('paintings.create');
    }

    public function store(Request $request)
    {
        $painting = new Painting;
        $painting->piece_of_art = $request->input('piece_of_art');
        $painting->painter = $request->input('painter');
        $painting->creation_date = $request->input('creation_date');
        $painting->art_movement = $request->input('art_movement');
        $painting->artistic_technique = $request->input('artistic_technique');
        $painting->size = $request->input('size');
        $painting->museum = $request->input('museum');
        $painting->curiosity = $request->input('curiosity');
        $painting->save();

        return redirect()->route('paintings.index');
    }
}

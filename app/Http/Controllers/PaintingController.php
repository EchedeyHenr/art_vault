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
        $request->validate([
            'piece_of_art' => 'required|string|max:255',
            'painter' => 'required|string|max:255',
            'creation_date' => 'required|string|max:255',
            'art_movement' => 'required|string|max:255',
            'artistic_technique' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'museum' => 'required|string|max:255',
            'curiosity' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048'
        ]);

        $painting = new Painting;
        $painting->piece_of_art = $request->input('piece_of_art');
        $painting->painter = $request->input('painter');
        $painting->creation_date = $request->input('creation_date');
        $painting->art_movement = $request->input('art_movement');
        $painting->artistic_technique = $request->input('artistic_technique');
        $painting->size = $request->input('size');
        $painting->museum = $request->input('museum');
        $painting->curiosity = $request->input('curiosity');
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = $file->store('pieces_of_art_photos', 'public');
            $painting->photo = $path;
        }

        $painting->save();

        return redirect()->route('paintings.index');
    }
}

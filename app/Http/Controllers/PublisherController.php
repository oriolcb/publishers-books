<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::all();
        return view('publishers.index', compact('publishers'));
    }

    public function create()
    {
        return view('publishers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Publisher::create($validatedData);

        return redirect()->route('publishers.index');
    }

    public function edit(Publisher $publisher)
    {
        return view('publishers.edit', compact('publisher'));
    }

    public function update(Request $request, Publisher $publisher)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $publisher->update($validatedData);

        return redirect()->route('publishers.index');
    }

    public function destroy(Publisher $publisher)
    {
        $publisher->delete();

        return redirect()->route('publishers.index');
    }
}

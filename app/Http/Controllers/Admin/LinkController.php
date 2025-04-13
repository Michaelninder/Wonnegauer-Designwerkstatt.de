<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::paginate(10); 
        return view('admin.links.index', compact('links'));
    }

    public function create()
    {
        return view('admin.links.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required|url',
            'description' => 'required',
        ]);

        Link::create($request->all());

        return redirect()->route('admin.links.index')->with('success', 'Link wurde erfolgreich hinzugefügt');
    }

    public function edit(Link $link)
    {
        return view('admin.links.edit', compact('link'));
    }

    public function update(Request $request, Link $link)
    {
        $request->validate([
            'name' => 'required',
            'url' => 'required|url',
            'description' => 'required',
        ]);

        $link->update($request->all());

        return redirect()->route('admin.links.index')->with('success', 'Link wurde erfolgreich aktualisiert');
    }

    public function destroy(Link $link)
    {
        $link->delete();
        return redirect()->route('admin.links.index')->with('success', 'Link wurde erfolgreich gelöscht');
    }
}

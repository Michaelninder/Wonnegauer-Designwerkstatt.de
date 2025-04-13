<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Date;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index()
    {
        $dates = Date::latest()->paginate(10); 
        return view('admin.dates.index', compact('dates'));
    }

    public function create()
    {
        return view('admin.dates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required|date',
        ]);

        Date::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        return redirect()->route('admin.dates.index')->with('success', 'Termin erfolgreich erstellt');
    }

    public function edit($uuid)
    {
        $date = Date::where('uuid', $uuid)->firstOrFail();
        return view('admin.dates.edit', compact('date'));
    }

    public function update(Request $request, $uuid)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required|date',
        ]);

        $date = Date::where('uuid', $uuid)->firstOrFail();
        $date->update([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        return redirect()->route('admin.dates.index')->with('success', 'Termin erfolgreich aktualisiert');
    }

    public function destroy($uuid)
    {
        $date = Date::where('uuid', $uuid)->firstOrFail();
        $date->delete();

        return redirect()->route('admin.dates.index')->with('success', 'Termin erfolgreich gelöscht');
    }
}

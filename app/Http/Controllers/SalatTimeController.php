<?php

namespace App\Http\Controllers;

use App\Models\SalatTime;
use Illuminate\Http\Request;

class SalatTimeController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $salatTimes = SalatTime::all();
        return view('salat_times.index', compact('salatTimes'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('salat_times.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'time' => 'required',
        ]);

        SalatTime::create($request->all());

        return redirect()->route('salat-times.index')->with('success', 'Salat time created successfully.');
    }

    // Display the specified resource.
    public function show(SalatTime $salatTime)
    {
        return view('salat_times.show', compact('salatTime'));
    }

    // Show the form for editing the specified resource.
    public function edit(SalatTime $salatTime)
    {
        return view('salat_times.edit', compact('salatTime'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, SalatTime $salatTime)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'time' => 'required',
        ]);

        $salatTime->update($request->all());

        return redirect()->route('salat-times.index')->with('success', 'Salat time updated successfully.');
    }

    // Remove the specified resource from storage.
    public function destroy(SalatTime $salatTime)
    {
        $salatTime->delete();

        return redirect()->route('salat-times.index')->with('success', 'Salat time deleted successfully.');
    }
}

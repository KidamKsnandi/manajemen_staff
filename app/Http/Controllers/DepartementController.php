<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departements = Departement::all();
        return view('departement.index', compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);

        $departement = new Departement();
        $departement->name = $validated['name'];
        $departement->save();

        return redirect()->route('departement.index')->with('success', 'Data departement berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $departement = Departement::findOrFail($id);
        return view('departement.edit', compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
        ]);

        $departement = Departement::findOrFail($id);
        $departement->name = $validated['name'];
        $departement->save();

        return redirect()->route('departement.index')->with('success', 'Data departement berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $departement = Departement::find($id);
        $departement->delete();
        return redirect()->route('departement.index')->with('success', 'Data Departement berhasil dihapus.');
    }
}

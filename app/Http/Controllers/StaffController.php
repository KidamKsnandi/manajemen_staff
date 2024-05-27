<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departement = Departement::all();
        return view('staff.create', compact('departement'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'departement' => 'required|max:255',
            'hired_date' => 'required|max:255',
        ]);

        $staff = new Staff();
        $staff->name = $validated['name'];
        $staff->email = $validated['email'];
        $staff->departement = $validated['departement'];
        $staff->hired_date = $validated['hired_date'];
        $staff->save();

        return redirect()->route('staff.index')->with('success', 'Data staff berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        $departement = Departement::all();
        return view('staff.edit', compact('staff', 'departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'departement' => 'required|max:255',
            'hired_date' => 'required|max:255',
        ]);

        $staff = Staff::findOrFail($id);
        $staff->name = $validated['name'];
        $staff->email = $validated['email'];
        $staff->departement = $validated['departement'];
        $staff->hired_date = $validated['hired_date'];
        $staff->save();

        return redirect()->route('staff.index')->with('success', 'Data staff berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $staff = Staff::find($id);
        $staff->delete();
        return redirect()->route('staff.index')->with('success', 'Data staff berhasil dihapus.');
    }
}

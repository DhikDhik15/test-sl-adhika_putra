<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use App\Models\Positions;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $employees = User::with(['position','division'])->get();
        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        $divisions = Divisions::all();
        $positions = Positions::all();
        return view('employees.create', compact('divisions', 'positions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'position_id' => 'required',
            'department_id' => 'required',
            'hire_date' => 'required|date',
        ]);

        User::create($validated);

        return redirect()->route('employees.index')->with('success', 'Pegawai ditambahkan.');
    }

    public function edit(int $id)
    {
        $employee = User::find($id);
        $divisions = Divisions::all();
        $positions = Positions::all();

        return view('employees.edit', compact('employee', 'divisions', 'positions'));
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required',
            'position_id' => 'required',
            'department_id' => 'required',
            'hire_date' => 'required|date',
        ]);

        $find = User::find($id)->update($validated);

        return redirect()->route('employees.index')->with('success', 'Pegawai berhasil diubah.');
    }

    public function destroy(int $id)
    {
        $find = User::find($id)->delete();

        return redirect()->route('employees.index')->with('success', 'Pegawai berhasil dihapus.');
    }
}

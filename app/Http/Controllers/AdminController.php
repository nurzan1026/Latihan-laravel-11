<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return view('admins.index', compact('admins'));
    }

    public function create()
    {
        return view('admins.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp_wa' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'jabatan' => 'required|string|max:255',
        ]);

        Admin::create($request->all());
        return redirect()->route('admins.index')->with('success', 'Admin created successfully');
    }

    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admins.show', compact('admin'));
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admins.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp_wa' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins,email,' . $id,
            'jabatan' => 'required|string|max:255',
        ]);

        $admin = Admin::findOrFail($id);
        $admin->update($request->all());
        return redirect()->route('admins.index')->with('success', 'Admin updated successfully');
    }

    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully');
    }
}

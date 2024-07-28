<?php

namespace App\Http\Controllers;
use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    public function index()
    {
        $data = Nasabah::all();
        return view('nasabah', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_induk' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'jumlah_orang_kk' => 'required|integer',
        ]);

        Nasabah::create($request->all());
        return response()->json(['message' => 'Nasabah created successfully']);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'no_induk' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'jumlah_orang_kk' => 'required|integer',
        ]);

        $nasabah = Nasabah::findOrFail($id);
        $nasabah->update($request->all());
        return response()->json(['message' => 'Nasabah updated successfully']);
    }

    public function destroy($id)
    {
        $nasabah = Nasabah::findOrFail($id);
        $nasabah->delete();
        return response()->json(['message' => 'Nasabah deleted successfully']);
    }
    public function show($id)
    {
        $nasabah = Nasabah::findOrFail($id);
        return response()->json($nasabah);
    }

    public function showAll()
    {
        $nasabah = Nasabah::all();
        return response()->json($nasabah);
    }
}

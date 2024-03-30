<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakta;

class FaktaController extends Controller
{
    // Menampilkan semua fakta
    public function index()
    {
        $faktas = Fakta::all();
        return view('dashboard.fakta.index', compact('faktas'));
    }

    // Menampilkan form untuk membuat fakta baru
    public function create()
    {
        return view('dashboard.fakta.create');
    }

    // Menyimpan fakta baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'coffe' => 'nullable|string',
            'project' => 'nullable|string',
            'jam' => 'nullable|integer',
            'candy' => 'nullable|string',
        ]);

        // Simpan fakta ke dalam database
        Fakta::create($request->all());

        // Redirect ke halaman faktas setelah berhasil disimpan
        return redirect()->route('fakta.index')->with('success', 'Fakta berhasil disimpan');
    }

    // Menampilkan fakta berdasarkan ID
    public function show($id)
    {
        $fakta = Fakta::findOrFail($id);
        return view('dashboard.fakta.show', compact('fakta'));
    }

    // Menampilkan form untuk mengedit fakta
    public function edit($id)
    {
        $fakta = Fakta::findOrFail($id);
        return view('dashboard.fakta.edit', compact('fakta'));
    }

    // Update fakta dalam database
    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'coffe' => 'nullable|string',
            'project' => 'nullable|string',
            'jam' => 'nullable|integer',
            'candy' => 'nullable|string',
        ]);

        // Update fakta dalam database
        Fakta::findOrFail($id)->update($request->all());

        // Redirect ke halaman faktas setelah berhasil diupdate
        return redirect()->route('fakta.index')->with('success', 'Fakta berhasil diupdate');
    }

    // Menghapus fakta dari database
    public function destroy($id)
    {
        Fakta::findOrFail($id)->delete();

        // Redirect ke halaman faktas setelah berhasil dihapus
        return redirect()->route('fakta.index')->with('success', 'Fakta berhasil dihapus');
    }
}

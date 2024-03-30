<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    // Menampilkan semua data skill
    public function index()
    {
        $skills = Skill::all();
        return view('dashboard.skill.index', compact('skills'));
    }

    // Menampilkan form untuk membuat data skill baru
    public function create()
    {
        return view('dashboard.skill.create');
    }

    // Menyimpan data skill baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'nama_skill' => 'required|string',
            'persentase_keahlian' => 'nullable|integer',
        ]);

        // Simpan data skill ke dalam database
        Skill::create($request->all());

        // Redirect ke halaman skills setelah berhasil disimpan
        return redirect()->route('skill.index')->with('success', 'Data skill berhasil disimpan');
    }

    // Menampilkan data skill berdasarkan ID
    public function show($id)
    {
        $skill = Skill::findOrFail($id);
        return view('dashboard.skill.show', compact('skill'));
    }

    // Menampilkan form untuk mengedit data skill
    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('dashboard.skill.edit', compact('skill'));
    }

    // Update data skill dalam database
    public function update(Request $request, $id)
    {
        // Validasi input dari form
        $request->validate([
            'nama_skill' => 'required|string',
            'persentase_keahlian' => 'nullable|integer',
        ]);

        // Update data skill dalam database
        Skill::findOrFail($id)->update($request->all());

        // Redirect ke halaman skills setelah berhasil diupdate
        return redirect()->route('skill.index')->with('success', 'Data skill berhasil diupdate');
    }

    // Menghapus data skill dari database
    public function destroy($id)
    {
        Skill::findOrFail($id)->delete();

        // Redirect ke halaman skills setelah berhasil dihapus
        return redirect()->route('skill.index')->with('success', 'Data skill berhasil dihapus');
    }
}

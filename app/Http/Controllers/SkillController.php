<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    // Tampilkan semua skill
    public function index()
    {
        $skills = Skill::all();
        return view('dashboard.skill', compact('skills')); // Kirim ke view dashboard.skill
    }


    // Tampilkan halaman tambah skill
    public function create()
    {
        return view('dashboard.page-editable.skill.tambah');
    }

    // Simpan skill baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_skill' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'presentase' => 'required|integer|min:0|max:100',
        ]);

        Skill::create([
            'nama_skill' => $request->nama_skill,
            'deskripsi' => $request->deskripsi,
            'presentase' => $request->presentase,
        ]);

        return redirect()->route('dashboard.skill')->with('success', 'Skill berhasil ditambahkan!');
    }

    // Tampilkan halaman edit skill
    public function edit($id)
    {
        $skill = Skill::findOrFail($id); // Cari skill berdasarkan ID
        return view('dashboard.page-editable.skill.edit', compact('skill'));
    }

    // Perbarui skill
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_skill' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'presentase' => 'required|integer|min:0|max:100',
        ]);

        $skill = Skill::findOrFail($id); // Cari skill berdasarkan ID
        $skill->update($request->all());

        return redirect()->route('dashboard.skill')->with('success', 'Skill berhasil diperbarui!');
    }

    // Hapus skill
    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('dashboard.skill')->with('success', 'Skill berhasil dihapus!');
    }

    // Tampilkan satu data skill
    public function show($id)
    {
        $skill = Skill::findOrFail($id); // Cari skill berdasarkan ID
        return view('dashboard.page-editable.skill.lihat', compact('skill'));
    }
}
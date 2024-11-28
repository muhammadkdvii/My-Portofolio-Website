<?php
namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portofolios = Portofolio::all();
        return view('dashboard.portofolio', compact('portofolios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.page-editable.portofolio.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_portofolio' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'link_portofolio' => 'required|url',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['nama_portofolio', 'deskripsi', 'kategori', 'link_portofolio']);
        
        // Handle file upload
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('portofolio_images', 'public');
            $data['foto'] = $path;
        }

        Portofolio::create($data);

        return redirect()->route('dashboard.portofolio')->with('success', 'Portofolio berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portofolio $portofolio)
    {
        return view('dashboard.page-editable.portofolio.edit', compact('portofolio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Portofolio $portofolio)
    {
        $request->validate([
            'nama_portofolio' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'link_portofolio' => 'required|url',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['nama_portofolio', 'deskripsi', 'kategori', 'link_portofolio']);

        // Handle file upload
        if ($request->hasFile('foto')) {
            // Delete the old photo if it exists
            if ($portofolio->foto && Storage::exists('public/' . $portofolio->foto)) {
                Storage::delete('public/' . $portofolio->foto);
            }

            // Upload new photo
            $path = $request->file('foto')->store('portofolio_images', 'public');
            $data['foto'] = $path;
        }

        $portofolio->update($data);

        return redirect()->route('dashboard.portofolio')->with('success', 'Portofolio berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portofolio $portofolio)
    {
        // Delete the photo file if it exists
        if ($portofolio->foto && Storage::exists('public/' . $portofolio->foto)) {
            Storage::delete('public/' . $portofolio->foto);
        }

        $portofolio->delete();

        return redirect()->route('dashboard.portofolio')->with('success', 'Portofolio berhasil dihapus');
    }

    public function show($id)
    {
        $portofolio = Portofolio::findOrFail($id); // Mengambil data berdasarkan ID
        return view('dashboard.page-editable.portofolio.lihat', compact('portofolio'));
    }
}
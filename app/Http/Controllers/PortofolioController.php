<?php
namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
   
    public function index()
    {
        $portofolios = Portofolio::all();
        return view('dashboard.portofolio', compact('portofolios'));
    }

  

  
    public function create()
    {
        return view('dashboard.page-editable.portofolio.tambah');
    }

   
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
        
      
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('portofolio_images', 'public');
            $data['foto'] = $path;
        }

        Portofolio::create($data);

        return redirect()->route('dashboard.portofolio')->with('success', 'Portofolio berhasil ditambahkan');
    }

   
    public function edit(Portofolio $portofolio)
    {
        return view('dashboard.page-editable.portofolio.edit', compact('portofolio'));
    }

  
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

        
        if ($request->hasFile('foto')) {
            // Delete the old photo if it exists
            if ($portofolio->foto && Storage::exists('public/' . $portofolio->foto)) {
                Storage::delete('public/' . $portofolio->foto);
            }

           
            $path = $request->file('foto')->store('portofolio_images', 'public');
            $data['foto'] = $path;
        }

        $portofolio->update($data);

        return redirect()->route('dashboard.portofolio')->with('success', 'Portofolio berhasil diperbarui');
    }

   
    public function destroy(Portofolio $portofolio)
    {
      
        if ($portofolio->foto && Storage::exists('public/' . $portofolio->foto)) {
            Storage::delete('public/' . $portofolio->foto);
        }

        $portofolio->delete();

        return redirect()->route('dashboard.portofolio')->with('success', 'Portofolio berhasil dihapus');
    }

    public function show($id)
    {
        $portofolio = Portofolio::findOrFail($id); 
        return view('dashboard.page-editable.portofolio.lihat', compact('portofolio'));
    }
}
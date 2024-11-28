<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all(); // Mengambil semua data Service
        return view('dashboard.service', compact('services'));
    }

    public function create()
    {
        return view('dashboard.page-editable.service.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_service' => 'required|string|max:255',
            'sub_nama_service' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric|min:0|max:100000',
        ]);

        Service::create($request->all());

        return redirect()->route('dashboard.service')->with('success', 'Service berhasil ditambahkan!');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id); // Mengambil data berdasarkan ID
        return view('dashboard.page-editable.service.lihat', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id); // Mengambil data berdasarkan ID
        return view('dashboard.page-editable.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_service' => 'required|string|max:255',
            'sub_nama_service' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric|min:0|max:100000',
        ]);

        $service = Service::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('dashboard.service')->with('success', 'Service berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return redirect()->route('dashboard.service')->with('success', 'Service berhasil dihapus!');
    }
}
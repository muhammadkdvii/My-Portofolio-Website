<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hire;
use Illuminate\Support\Facades\Storage;

class HireController extends Controller
{

   
    public function store(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'nama_perusahaan' => 'required|string|max:255',
            'email_perusahaan' => 'required|email',
            'formulir' => 'required|file|mimes:pdf,docx,doc|max:2048',
        ]);

        // Handle file upload
        $formulirPath = $request->file('formulir')->store('formulirs', 'public');

        // Create the Hire record
        Hire::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'email_perusahaan' => $request->email_perusahaan,
            'formulir' => $formulirPath,
        ]);

        // Redirect back to the index with success and new hire data
        return redirect()->route('home')->with([
            'success' => 'Data hired successfully!',
            'newHire' => [
                'nama_perusahaan' => $request->nama_perusahaan,
                'email_perusahaan' => $request->email_perusahaan,
                'formulir' => $formulirPath,
            ]
        ]);
    }

    public function destroy($id)
    {
        $hire = Hire::findOrFail($id);
        // Delete file from storage
        Storage::delete($hire->formulir);
        // Delete record from database
        $hire->delete();

        return redirect()->route('dashboard.index')->with('success', 'Record deleted successfully.');
    }
}
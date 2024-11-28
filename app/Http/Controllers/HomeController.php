<?php
namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Portofolio;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Ambil data skill dan service
        $skills = Skill::inRandomOrder()->take(6)->get();
        $services = Service::inRandomOrder()->take(3)->get();
    
        // Menangani kategori untuk Portofolio
        $kategori = $request->get('kategori', 'semua'); // default 'semua' untuk menampilkan semua kategori
    
        // Filter portofolio berdasarkan kategori yang dipilih
        if ($kategori === 'semua') {
            $portofolios = Portofolio::inRandomOrder()->take(6)->get(); // Menampilkan 6 portofolio secara acak
        } else {
            $portofolios = Portofolio::where('kategori', $kategori)->inRandomOrder()->take(6)->get();
        }
    
        // Jika request adalah AJAX, hanya kembalikan bagian portofolio
        if ($request->ajax()) {
            return view('partials.portfolios', compact('portofolios'));
        }
    
        // Kirim data ke view utama
        return view('index', compact('skills', 'portofolios', 'services', 'kategori'));
    }
    

    public function moreServices()
    {
        // Ambil data service untuk halaman 'moreServices'
        $services = Service::all(); // Ambil semua services

        // Kirim data ke view 'moreServices'
        return view('moreServices', compact('services'));
    }
}
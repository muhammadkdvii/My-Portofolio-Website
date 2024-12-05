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
        $skills = Skill::inRandomOrder()->take(6)->get();
        $services = Service::inRandomOrder()->take(3)->get();
    
        $kategori = $request->get('kategori', 'semua');
        if ($kategori === 'semua') {
            $portofolios = Portofolio::inRandomOrder()->take(9)->get(); // Menampilkan 9 portofolio secara acak
        } else {
            $portofolios = Portofolio::where('kategori', $kategori)->inRandomOrder()->take(9)->get();
        }

        // Kirim data ke view utama
        return view('index', compact('skills', 'portofolios', 'services', 'kategori'));
    }
    
    public function moreServices()
    {
        
        $services = Service::all(); 

      
        return view('moreServices', compact('services'));
    }
}
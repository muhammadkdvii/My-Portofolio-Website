<?php

namespace App\Http\Controllers;

use App\Models\Hire;
use App\Models\Portofolio;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
{
  
    $skillsCount = Skill::count();
    $serviceCount = Service::count();
    $portfolioCount = Portofolio::count();
    $hireCount = Hire::count();

    $hires = Hire::all();
    
   
    return view('dashboard.index', compact('skillsCount', 'serviceCount', 'portfolioCount', 'hireCount', 'hires'));
}

public function hireIndex(){
    $hires = Hire::all();
    return view('dashboard.index', compact('hires'));
}

}
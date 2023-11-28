<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Category;
use App\Models\Penerbit;

class DashboardController extends Controller
{
    public function index()
    {
        
        $anggota = Anggota::all();
        $category = Category::all();
        $penerbit = Penerbit::all();
        
        return view('dashboard.index', compact('anggota', 'category', 'penerbit'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        //
        $search = $request->query('search');
        $query = Mahasiswa::query();
        if ($search) {
            $query->where('nama', 'like', "%" . $search . "%");
        }
        $mahasiswa = $query->orderBy('nim', 'desc')->get();
        return view('mahasiswa.home', compact('mahasiswa', 'search'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $search = $request->query('search');
        $query = Mahasiswa::query();
        if ($search) {
            $query->where('nama', 'like', "%" . $search . "%");
        }
        $mahasiswa = $query->orderBy('nim', 'desc')->get();
        return view('mahasiswa.index', compact('mahasiswa', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'tanggallahir' => 'required',
            'umur' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
        ]);
        Mahasiswa::create($validated);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validated = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'tanggallahir' => 'required',
            'umur' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
        ]);
        Mahasiswa::where('id', $id)->update($validated);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Mahasiswa::where('id', $id)->first()->delete();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\temans;
use Illuminate\Support\Facades\DB;

class temansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dt = temans::all();
        return view('teman.index',compact('dt'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'wa' => 'required',
        ]);

        temans::create($request->all());

        return redirect()->route('teman.index')->with('success', 'Data berhasil ditambahkan!');
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
        $dt = temans::findOrFail($id);

        return view('teman.edit',compact('dt'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

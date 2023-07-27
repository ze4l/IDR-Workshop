<?php

namespace App\Http\Controllers;

use App\Models\DaftarBarang;
use App\Http\Requests\StoreDaftarBarangRequest;
use App\Http\Requests\UpdateDaftarBarangRequest;

class DaftarBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('daftarBarang', [
            "daftars"=>DaftarBarang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDaftarBarangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DaftarBarang $daftarBarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DaftarBarang $daftarBarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDaftarBarangRequest $request, DaftarBarang $daftarBarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DaftarBarang $daftarBarang)
    {
        //
    }
}

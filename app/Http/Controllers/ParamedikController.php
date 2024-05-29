<?php

namespace App\Http\Controllers;

use App\Models\Paramedik; //tambahin ini
use Illuminate\Http\Request;

class ParamedikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_paramedik = Paramedik::all();
// buat turunan model paramedik
        return view('paramedik.index', ['list_paramedik'=>$list_paramedik]);
// kirim array data ke view paramedik index menggunakan assosiatif array
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
    public function store(Request $request)
    {
        //
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
        // kasih perintah hapus data
    }
}

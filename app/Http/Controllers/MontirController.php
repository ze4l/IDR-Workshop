<?php

namespace App\Http\Controllers;
use App\Models\Montir;
use Illuminate\Http\Request;

class MontirController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Montir::all();
        return view('montir', compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    

  
}

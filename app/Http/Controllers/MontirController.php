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


    public function tambahmontir(){
        return view('tambahdata');
    }


    public function insertdata(Request $request){
        Montir::create($request->all());

        return redirect()->route('montir')->with('success','Data Berhasil Di Tambahkan');
    }



    public function delete($id) {
        $data = Montir::find($id);
        $data->delete();
        return redirect()->route('montir')->with('success', 'Data Berhasil Di Hapus');
    }

    

    public function tampilkandata($id){
        $data = Montir::find($id);
        return view('tampildata', compact('data'));
    }


    public function updatedata(Request $request, $id){
        $data = Montir::find($id);
        $data->update($request->all());
        return redirect()->route('montir')->with('success','Data Berhasil Di Update');
    }


  

  
}

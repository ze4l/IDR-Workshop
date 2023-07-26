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
<<<<<<< HEAD
<<<<<<< HEAD
        return redirect()->route('montir')->with('success','Data Berhasil Di Tambakan');
    }

   

=======
        return redirect()->route('montir')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){
        $data = Montir::find($id);
        dd($data);
        // return view('tampildata', compact('data'));
    }


    // public function updatedata(Request $reques, $id){
    //     $data = Montir::find($id);
    //     $data->update();
    //     return redirect()->route('montir')->with('success','Data Berhasil Di Update');
    // }

=======
        return redirect()->route('montir')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id){
        $data = Montir::find($id);
        dd($data);
        // return view('tampildata', compact('data'));
    }


    // public function updatedata(Request $reques, $id){
    //     $data = Montir::find($id);
    //     $data->update();
    //     return redirect()->route('montir')->with('success','Data Berhasil Di Update');
    // }

>>>>>>> 7dc9c15e637a442a82f1999e553eb948b11081bc
    // public function delete($id) {
    //     $data = Montir::find($id);
    //     $data->delete();
    //     return redirect()->route('montir')->with('success','Data Berhasil Di Hapus');
    // }

   

<<<<<<< HEAD
>>>>>>> 1f1b24b7bc0ad3570724d630a480ffb548ef249d
=======
>>>>>>> 7dc9c15e637a442a82f1999e553eb948b11081bc
  
}

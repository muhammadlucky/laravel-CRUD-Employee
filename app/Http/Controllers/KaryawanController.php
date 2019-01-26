<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;

class KaryawanController extends Controller
{
    //buat fungsi baru untuk index
    function index() {
        //echo "up";
        $karyawan = Karyawan::get(['karyawan_id','karyawan_name','karyawan_address','telpon_karyawan']);
        //var_dump($karyawan);
        return view('karyawan.index', compact('karyawan'));

    }

    function create() {
        return view('karyawan.create');
    }

    public function show($id) {
        $karyawan = Karyawan::where('karyawan_id', $id)->get();
        return view('karyawan.show',compact('karyawan'));
    }

    public function edit($id){
        $karyawan = Karyawan::where('karyawan_id', $id)->get();
        return view('karyawan.edit', compact('karyawan'));
    }

    public function store (Request $request) {
        $txtId = $request->input('txt_id');
        $txtName = $request->input('txt_name');
        $txtAddress= $request->input('txt_address');
        $txtTelpon= $request->input('txt_telpon');

        echo $txtId." <br />".
        $txtName." <br />".
        $txtAddress." <br />".
        $txtTelpon;

        Karyawan::create([
            'karyawan_id' => $txtId,
            'karyawan_name' => $txtName,
            'karyawan_address' => $txtAddress,
            'telpon_karyawan' => $txtTelpon
        ]);

        return 
        redirect('/Karyawan');   
    }

    public function update(Request $request, $id)
    {
        $txtId = $request->input('txt_id');
        $txtName = $request->input('txt_name');
        $txtAddress = $request->input('txt_address');
        $txtTelpon = $request->input('txt_telpon');
        
        Karyawan::where('karyawan_id', $id)->update([
            'karyawan_name' => $txtName,
            'karyawan_address' => $txtAddress,
            'telpon_karyawan' => $txtTelpon
        ]);

        return redirect('/Karyawan');
    }
    
    public function destroy($id)
    {
        $karyawan = Karyawan::where('karyawan_id', $id)->first();
        $karyawan->delete();

        return 
        redirect('/Karyawan');
    }
}

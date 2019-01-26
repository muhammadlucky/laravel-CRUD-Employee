<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{
    //buat fungsi baru untuk index
    function index() {
        //echo "up";
        $supplier = Supplier::get(['supplier_id','supplier_name','supplier_address']);
        //var_dump($supplier);
        return view('supplier.index', compact('supplier'));
    }
    function create() {
        return view('supplier.create');
    }

    public function show($id) {
        $supplier = Supplier::where('supplier_id', $id)->get();
        return view('supplier.show',compact('supplier'));
    }

    public function edit($id){
        $supplier = Supplier::where('supplier_id', $id)->get();
        return view('supplier.edit', compact('supplier'));
    }

    public function store (Request $request) {
        $txtId = $request->input('txt_id');
        $txtName = $request->input('txt_name');
        $txtAddress= $request->input('txt_address');

        echo $txtId." <br />".
        $txtName." <br />".
        $txtAddress;

        Supplier::create([
            'supplier_id' => $txtId,
            'supplier_name' => $txtName,
            'supplier_address' => $txtAddress
        ]);

        return 
        redirect('/Supplier');
    }

    public function update(Request $request, $id)
    {
        $txtId = $request->input('txt_id');
        $txtName = $request->input('txt_name');
        $txtAddress = $request->input('txt_address');
        
        Supplier::where('supplier_id', $id)->update([
            'supplier_name' => $txtName,
            'supplier_address' => $txtAddress
        ]);

        return redirect('/Supplier');
    }
    
    public function destroy($id)
    {
        $supplier = Supplier::where('supplier_id', $id)->first();
        $supplier->delete();

        return 
        redirect('/Supplier');
    }
}

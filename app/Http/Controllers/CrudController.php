<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    // Tampilkan data
    public function index()
    {
        // $inventory = DB::table('inventory')->get();
        $inventory = DB::table('inventory')->paginate(3);
        return view('crud', ['inventory' => $inventory]);
    }

    // Method untuk menampilkan halaman tambah data
    public function add()
    {
        return view('crud-add-data');
    }

    public function create(Request $request)
    {
        // dd($request->all());    // dump & die
        $this->_validation($request);
        
        DB::insert(
            'insert into inventory (inventory_kode, inventory_name) values (?, ?)', 
            [$request->inventory_kode, $request->inventory_name]
        );

        // Cara lain
        // DB::table('inventory')->insert([
        //     ['inventory_kode' => $request->inventory_kode, 'inventory_name' => $request->inventory_name],
        //     ['inventory_kode' => $request->inventory_kode.'xx', 'inventory_name' => $request->inventory_name.'xx'],
        // ]);
        return redirect()->route('crud.read')->with('message', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $data_barang = DB::table('inventory')->where('id', $id)->first();
        // \print_r($data_barang);die;
        return view('crud-edit-data', ['data_barang' => $data_barang]);
        // return view('crud-edit-data');
    }

    private function _validation(Request $request)
    {
        $validation = $request->validate(
            [
                'inventory_kode' => 'required|min:3|max:10',
                'inventory_name' => 'required|min:1|max:100'
            ],
            [
                'inventory_kode.required' => 'Kode barang harus diisi',
                'inventory_kode.min' => 'Kode barang minimal 1 digit',
                'inventory_kode.max' => 'Kode barang maksimal 10 digit',
                'inventory_name.required' => 'Nama barang harus diisi',
                'inventory_name.min' => 'Nama barang minimal 3 digit',
                'inventory_name.max' => 'Nama barang maksimal 10 digit',
            ]
        );
    }

    public function update(Request $request, $id)
    {
        // print_r($request->all());die;
        $this->_validation($request);
        DB::table('inventory')->where('id', $id)->update([
            'inventory_kode' => $request->inventory_kode,
            'inventory_name' => $request->inventory_name,
        ]);
        return redirect()->route('crud.read')->with('message', 'Data berhasil diperbaharui');
    }

    public function delete($id)
    {
        // echo $id;
        DB::table('inventory')->where('id', $id)->delete();
        return redirect()->back()->with('message', 'Data berhasil dihapus');
    }
}

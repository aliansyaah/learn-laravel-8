<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    // Tampilkan data
    public function index()
    {
        $inventory = DB::table('inventory')->get();
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
        DB::insert(
            'insert into inventory (inventory_kode, inventory_name) values (?, ?)', 
            [$request->inventory_kode, $request->inventory_name]
        );
        return redirect()->route('crud.read');
    }

    public function edit()
    {
        return view('crud-tambah-data');
    }

    public function update()
    {
        return view('crud-tambah-data');
    }

    public function delete()
    {
        return view('crud-tambah-data');
    }
}

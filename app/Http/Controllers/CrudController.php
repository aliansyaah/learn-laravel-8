<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    // Tampilkan data
    public function index()
    {
        // return "Ini tampil data";
        return view('crud');
    }

    // Method untuk menampilkan halaman tambah data
    public function add()
    {
        return view('crud-tambah-data');
    }

    public function create()
    {
        return view('crud-tambah-data');
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

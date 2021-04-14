@extends('layouts.master')
@section('title', 'Laravel')
@section('content')
<div class="section-body">
    <!-- <h2 class="section-title">Forms</h2>
    <p class="section-lead">
    Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
    </p> -->

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <!-- <a href="/crud/add" class="btn btn-icon icon-left btn-primary"><i class="fa fa-plus"></i> Tambah Data</a> -->
            <a href="{{ route('crud.add') }}" class="btn btn-icon icon-left btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
            <hr>

            <table class="table table-striped table-bordered table-sm">
                <tr>
                    <th>No.</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Action</th>
                </tr>
                @foreach ($inventory as $no => $val)
                    <tr>
                        <td>{{ $no+1 }}</td>
                        <td>{{ $val->inventory_kode }}</td>
                        <td>{{ $val->inventory_name }}</td>
                        <td>
                            <a href="#" class="badge badge-warning">Edit</a>
                            <a href="#" class="badge badge-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
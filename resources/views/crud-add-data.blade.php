@extends('layouts.master')
@section('title', 'Laravel')
@section('content')
<div class="section-body">
    {{-- <h2 class="section-title">Forms</h2>
    <p class="section-lead">
    Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
    </p> --}}

    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <form action="{{ route('crud.save') }}" method="POST">
                @csrf
                <div class="card">
                    {{-- <div class="card-header">
                        <h4>HTML5 Form Basic</h4>
                    </div> --}}
                    <div class="card-body">
                        {{-- <div class="alert alert-info">
                            <b>Note!</b> Not all browsers support HTML5 type input.
                        </div> --}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{-- Utk mengubah warna text mjd merah jika ada error --}}
                                    <label @error('inventory_kode') class="text-danger" @enderror>
                                        Kode Barang
                                        {{-- Jika ada error, print pesan error --}}
                                        @error('inventory_kode')
                                            | {{ $message }}
                                        @enderror
                                    </label>
                                    {{-- old('attr-name') berfungsi agar ketika user ada kesalahan, valuenya tidak hilang --}}
                                    <input type="text" name="inventory_kode" class="form-control" value="{{ old('inventory_kode') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {{-- <label>Nama Barang</label>
                                    <input type="text" name="inventory_name" class="form-control"> --}}
                                    {{-- Utk mengubah warna text mjd merah jika ada error --}}
                                    <label @error('inventory_name') class="text-danger" @enderror>
                                        Nama Barang
                                        {{-- Jika ada error, print pesan error --}}
                                        @error('inventory_name')
                                            | {{ $message }}
                                        @enderror
                                    </label>
                                    {{-- old('attr-name') berfungsi agar ketika user ada kesalahan, valuenya tidak hilang --}}
                                    <input type="text" name="inventory_name" class="form-control" value="{{ old('inventory_name') }}">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label>Select</label>
                            <select class="form-control">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select Multiple</label>
                            <select class="form-control" multiple="" data-height="100%" style="height: 100%;">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Textarea</label>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="d-block">Checkbox</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Checkbox 1
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="defaultCheck3">
                                <label class="form-check-label" for="defaultCheck3">
                                    Checkbox 2
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Color</label>
                            <input type="color" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Datetime Local</label>
                            <input type="datetime-local" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>File</label>
                            <input type="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Month</label>
                            <input type="month" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="d-block">Radio</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked="">
                                <label class="form-check-label" for="exampleRadios1">
                                    Radio 1
                                </label>
                            </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked="">
                            <label class="form-check-label" for="exampleRadios2">
                                Radio 2
                            </label>
                        </div>
                        </div>
                        <div class="form-group">
                            <label>Range</label>
                            <input type="range" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Search</label>
                            <input type="search" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tel</label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Time</label>
                            <input type="time" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Url</label>
                            <input type="url" class="form-control">
                        </div>
                        <div class="form-group mb-0">
                            <label>Week</label>
                            <input type="week" class="form-control">
                        </div> --}}
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                        <button class="btn btn-secondary" type="reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
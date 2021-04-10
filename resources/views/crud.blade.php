@extends('layouts.master')
@section('title', 'Laravel')
@section('content')
<div class="section-body">
    <!-- <h2 class="section-title">Forms</h2>
    <p class="section-lead">
    Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms.
    </p> -->

    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <!-- <a href="/crud/add" class="btn btn-icon icon-left btn-primary"><i class="fa fa-plus"></i> Tambah Data</a> -->
            <a href="{{ route('crud.add') }}" class="btn btn-icon icon-left btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
    </div>
</div>
@endsection
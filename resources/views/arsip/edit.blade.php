@extends('layouts.master')
@section('title','Edit Arsip Surat')
<link rel="shortcut icon" href="{{asset('AdminLTE-3.2.0')}}/dist/img/dinas.png" type="image/x-icon">

@section('content')
<br>
<div class="container">
    <div class="row"></div>
    <div class="col-md-6">
        <h4>Edit Arsip</h4>
        <br>
        <form action="{{ route('arsip.update', $data->id) }}" method="POST">
        @csrf
                     <div class="form-group">
            <label>ID <span class="text-danger" ></span></label>
            <input class="form-control" type="text" name="id" id="" value="{{ $data->id }}"/>
        </div>
        <div class="form-group">
                <label>Nomor Surat <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="nomorsurat" id="nomorsurat" value="{{ $data->nomorsurat }}">
            </div>
     

            <div class="form-group">
                    <label>Kategori <span class="text-danger">*</span></label>
                    <select class="form-control" type="options" name="kategori" id="kategori" />
                    <option value="Undangan">Undangan</option>
                    <option value="Undangan">Pengumuman</option>
                                <option value="Surat Tugas">Surat Tugas</option>
                                <option value="Nota Dinas">Nota Dinas</option>
                               </select>
                </div>

            <div class="form-group">
                <label>Judul <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="judul" id="judul" value="{{ $data->judul }}">
            </div>
            <div class="form-group">
                <label>Dokumen <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="dokumen" id="dokumen" value="{{ $data->dokumen }}">
            </div>
        </br>
        <div><button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('arsip.lihat', $data->id)}}" class="btn btn-success">Kembali</a></div>
        </form>
    </div>
</div>
@endsection
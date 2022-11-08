@extends('layouts.master')
@section('title','Laporan Surat Keluar Dinas Kelautan dan Perikanan Provinsi Jawa Timur')
<link rel="shortcut icon" href="{{asset('AdminLTE-3.2.0')}}/dist/img/dinas.png" type="image/x-icon">

@section('content')
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
                    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>           
</head>
<br>
<div class="container">
    <div class="row"></div>
        <div class="col-md-6">
            <h4>Arsip Surat >> Unggah</h4>
            <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan. <p>
                Catatan : <p>
                    Gunakan file berformat PDF.
                </p>
            </p></p>
            <br>
            @if ($errors->any())
            <div class="alert alert danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{route('arsip.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nomor Surat<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" name="nomorsurat" id="nomorsurat" />
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
                    <input class="form-control" type="text" name="judul" id="judul" >
                </div>
                    <div class="form-group">
                    <label>File Surat (PDF) <span class="text-danger">*</span></label>
                    <input class="form-control" type="file" name="dokumen" id="dokumen" >
                </div>
                               <br>
                               
                               <div> <a href="{{route('arsip.index')}}" class="btn btn-success"><< Kembali</a>
               <button type="submit" class="btn btn-primary">Simpan</button></div>
            </form>
        </div></div></div>
@endsection
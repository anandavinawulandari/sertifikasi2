@extends('layouts.master')
@section('title','Arsip Surat')
<link rel="shortcut icon" href="{{asset('AdminLTE-3.2.0')}}/dist/img/dinas.png" type="image/x-icon">

@section('content')

<div class="container ">
    @if(Session::has('sucess'))
    <div class="alert alert-sucess " role="alert">
        {{Session::get('sucess')}}</div>
        @endif
        <div class="car-body">
        <h1>Arsip Surat</h1>
        <p>Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. <p>
            Klik "Lihat" pada kolom aksi untuk menampilkan surat.
        </p></p>
<br>

</div>
<div class="panel-heading " >
      
            </div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

                <div class="panel-body py-3">
                    <table class="table table-bordered table-striped" id="table-arsip">
                        <thead>
                            <tr>
                            <form method="POST">
                                <th style="width:5%">No</th>
                              <th style="width:150px">Nomor Surat</th>
                                <th style="width:150px">Kategori</th>
                                <th style="width:150px">Judul</th>
                                <th style="width:200px">Waktu Pengarsipan</th>
                                <th style="width:260px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataArsip as $data)
                            <tr>
                                <td> {{ $loop->iteration }}</td>
                    
                                <td> {{ $data->nomorsurat }}</td>
                                <td> {{ $data->kategori }}</td>
                                <td> {{ $data->judul}}</td>
                                <td> {{ $data->created_at}}</td>
                                <td>
                                <form action="{{ route('arsip.destroy', $data->id)}}" method="post">@csrf
                                
                                <button class="btn btn-danger" onClick="return confirm('Apakah Anda yakin ingin menghapus arsip surat ini?')">Hapus</button>  
                                                           <a href="{{ route('arsip.cetak', $data->id)}}" class="btn btn-outline-success" target="__blank">Unduh</a>

                                <a href="{{ route('arsip.lihat', $data->id)}}" class="btn btn-warning">Lihat >></a>
                                                           </form> </td>
                                    </tr>
                            @endforeach
                        </tbody>
                    </table>
                   <br>

                    <a href="{{route('arsip.create')}}" class="btn btn-success pull-right">Arsipkan Surat</a>


                </div>
            </div>
        </div>

        </div>
            </div>
        </div>
    </div>

    @stop

@push('scripts')
<script>
$(function() {
    $('#table-arsip').DataTable();
});
</script>

@endpush


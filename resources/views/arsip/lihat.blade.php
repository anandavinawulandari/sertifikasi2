@extends('layouts.master2')
@section('title','About')
<link rel="shortcut icon" href="{{asset('AdminLTE-3.2.0')}}/dist/img/dinas.png" type="image/x-icon">
@extends('layouts.bagatas')


@section('content')


<div class="panel-heading " >
      
            </div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

                <div class="panel-body py-10">
                    
                <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip-{{ $data->id}}</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<div class="panel-heading " >
      
            </div>
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

                <div class="panel-body py-10">
                <table border="1" cellspacing="0">
                <td width="1000px" height="auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <iframe src="{{ route('arsip.kop2', $data->id)}}" frameBorder="0" scrolling="auto" width="1000" height="390px"  ></iframe>   
   
    </td>


</table>
<br>
<td>
         &nbsp;&nbsp;&nbsp;<button class="btn btn-outline-danger" ><a href="{{ route('arsip.index')}}"><< Kembali</button>  </a>
         <a href="{{ route('arsip.cetak', $data->id)}}" class="btn btn-outline-success" target="__blank">Unduh</a>
<a href="{{ route('arsip.edit', $data->id)}}" class="btn btn-warning">Edit/Ganti File</a>  

     </td>                
                
               </p>
                   <br>
               

                  
                </div>

    @stop

@push('scripts')

<script>
$(function() {
    $('#table-arsip').DataTable();
});
</script>


                                                           


@endpush
